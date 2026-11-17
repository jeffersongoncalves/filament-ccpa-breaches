<?php

use Illuminate\Support\Carbon;
use JeffersonGoncalves\CcpaBreaches\Facades\CcpaBreaches;
use JeffersonGoncalves\CcpaBreaches\Models\Breach;
use JeffersonGoncalves\Filament\CcpaBreaches\CcpaBreachesPlugin;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\BreachResource;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages\CreateBreach;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages\EditBreach;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages\ListBreaches;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages\ViewBreach;
use JeffersonGoncalves\Filament\CcpaBreaches\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Privacy lead', 'email' => 'privacy@example.com']));
});

it('registers a breach with the notice target', function () {
    Livewire::test(CreateBreach::class)
        ->fillForm([
            'title' => 'Backup exposed',
            'discovered_at' => '2026-11-13 10:00:00',
            'data_categories' => ['name', 'account number'],
            'affected_residents' => 1200,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Breach::sole())
        ->due_at->toDateTimeString()->toBe('2026-12-13 10:00:00')
        ->data_categories->toBe(['name', 'account number'])
        ->notification_required->toBeNull();
});

it('lists breaches and filters the overdue ones', function () {
    $overdue = CcpaBreaches::open('Backup exposed', Carbon::now()->subDays(40));
    $recent = CcpaBreaches::open('Phishing');

    Livewire::test(ListBreaches::class)
        ->assertCanSeeTableRecords([$overdue, $recent])
        ->filterTable('overdue')
        ->assertCanSeeTableRecords([$overdue])
        ->assertCanNotSeeTableRecords([$recent]);

    expect(BreachResource::getNavigationBadge())->toBe('2')
        ->and(BreachResource::getNavigationBadgeColor())->toBe('danger');
});

it('walks a large breach through assessment, notices and closing', function () {
    $breach = CcpaBreaches::open('Backup exposed', attributes: ['affected_residents' => 1200]);

    Livewire::test(ViewBreach::class, ['record' => $breach->getKey()])
        ->assertActionHidden('close')
        ->callAction('assess', ['notification_required' => true, 'assessment' => 'Unencrypted account numbers.'])
        ->assertHasNoActionErrors();

    Livewire::test(ViewBreach::class, ['record' => $breach->getKey()])
        ->callAction('notifyResidents', ['at' => '2026-11-16 10:00:00']);

    Livewire::test(ViewBreach::class, ['record' => $breach->getKey()])
        ->assertActionHidden('close')
        ->callAction('notifyAttorneyGeneral', ['reference' => 'AG-42', 'at' => now()->toDateTimeString()]);

    Livewire::test(ViewBreach::class, ['record' => $breach->getKey()])
        ->callAction('close');

    expect($breach->fresh())
        ->notification_required->toBeTrue()
        ->residents_notified_at->toDateTimeString()->toBe('2026-11-16 10:00:00')
        ->attorney_general_reference->toBe('AG-42')
        ->closed_at->not->toBeNull();
});

it('records a law enforcement delay, which stops the breach being overdue', function () {
    $breach = CcpaBreaches::open('Ransomware', now()->subDays(40));

    Livewire::test(ViewBreach::class, ['record' => $breach->getKey()])
        ->callAction('delayForLawEnforcement', ['reason' => 'FBI asked us to wait.'])
        ->assertActionHidden('delayForLawEnforcement');

    expect($breach->fresh()->isOverdue())->toBeFalse();
});

it('closes a breach that needs no notice', function () {
    $breach = CcpaBreaches::assess(CcpaBreaches::open('Lost encrypted laptop', attributes: ['encrypted' => true]), false);

    Livewire::test(ViewBreach::class, ['record' => $breach->getKey()])
        ->assertActionHidden('notifyResidents')
        ->assertActionHidden('notifyAttorneyGeneral')
        ->callAction('close');

    expect($breach->fresh()->closed_at)->not->toBeNull();
});

it('edits the description but never the discovery date', function () {
    $breach = CcpaBreaches::open('Backup exposed', Carbon::parse('2026-11-13 10:00'));

    Livewire::test(EditBreach::class, ['record' => $breach->getKey()])
        ->fillForm(['what_happened' => 'Public bucket for 2 hours.', 'discovered_at' => '2026-11-01 10:00:00'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($breach->fresh())
        ->what_happened->toBe('Public bucket for 2 hours.')
        ->discovered_at->toDateTimeString()->toBe('2026-11-13 10:00:00');
});

it('offers the same actions on the table rows', function () {
    $breach = CcpaBreaches::open('Backup exposed');

    Livewire::test(ListBreaches::class)
        ->callTableAction('assess', $breach, ['notification_required' => false]);

    expect($breach->fresh()->notification_required)->toBeFalse();
});

it('applies the fluent plugin options', function () {
    CcpaBreachesPlugin::get()->navigationGroup('CCPA')->slug('security-breaches');

    expect(BreachResource::getNavigationGroup())->toBe('CCPA')
        ->and(BreachResource::getSlug())->toBe('security-breaches');
});
