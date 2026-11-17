<?php

namespace JeffersonGoncalves\Filament\CcpaBreaches\Actions;

use Filament\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use JeffersonGoncalves\CcpaBreaches\BreachManager;
use JeffersonGoncalves\CcpaBreaches\Models\Breach;
use JeffersonGoncalves\Filament\CcpaBreaches\Support\Labels;

/**
 * Row and view-page actions: each one is a thin call to laravel-ccpa-breaches' BreachManager.
 */
class BreachActions
{
    /**
     * @return list<Action>
     */
    public static function all(): array
    {
        return [static::assess(), static::delayForLawEnforcement(), static::notifyResidents(), static::notifyAttorneyGeneral(), static::close()];
    }

    public static function assess(): Action
    {
        return Action::make('assess')
            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.actions.assess.label'))
            ->icon('heroicon-o-scale')
            ->color('warning')
            ->visible(fn (Breach $record): bool => $record->closed_at === null)
            ->modalDescription(__('filament-ccpa-breaches::filament-ccpa-breaches.actions.assess.description'))
            ->fillForm(fn (Breach $record): array => ['notification_required' => $record->notification_required ?? true, 'assessment' => $record->assessment])
            ->schema([
                Toggle::make('notification_required')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.notification_required')),
                Textarea::make('assessment')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.assessment')),
            ])
            ->action(function (Breach $record, array $data): void {
                app(BreachManager::class)->assess($record, (bool) ($data['notification_required'] ?? false), $data['assessment'] ?? null);
                static::done('assess');
            });
    }

    public static function delayForLawEnforcement(): Action
    {
        return Action::make('delayForLawEnforcement')
            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.actions.law_enforcement_delay.label'))
            ->icon('heroicon-o-pause-circle')
            ->color('gray')
            ->visible(fn (Breach $record): bool => $record->owesResidentNotice() && $record->law_enforcement_delay === null)
            ->modalDescription(__('filament-ccpa-breaches::filament-ccpa-breaches.actions.law_enforcement_delay.description'))
            ->schema([
                Textarea::make('reason')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.law_enforcement_delay'))
                    ->required(),
            ])
            ->action(function (Breach $record, array $data): void {
                app(BreachManager::class)->delayForLawEnforcement($record, $data['reason']);
                static::done('law_enforcement_delay');
            });
    }

    public static function notifyResidents(): Action
    {
        return Action::make('notifyResidents')
            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.actions.notify_residents.label'))
            ->icon('heroicon-o-envelope')
            ->color('info')
            ->visible(fn (Breach $record): bool => $record->notification_required === true && $record->owesResidentNotice())
            ->schema([
                DateTimePicker::make('at')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.notified_at'))
                    ->default(now())
                    ->required(),
                Toggle::make('substitute')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.substitute_notice'))
                    ->helperText(__('filament-ccpa-breaches::filament-ccpa-breaches.help.substitute_notice')),
            ])
            ->action(function (Breach $record, array $data): void {
                app(BreachManager::class)->notifyResidents($record, Labels::date($data['at']), (bool) ($data['substitute'] ?? false));
                static::done('notify_residents');
            });
    }

    public static function notifyAttorneyGeneral(): Action
    {
        return Action::make('notifyAttorneyGeneral')
            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.actions.notify_attorney_general.label'))
            ->icon('heroicon-o-building-library')
            ->color('info')
            ->visible(fn (Breach $record): bool => $record->owesAttorneyGeneralNotice())
            ->modalDescription(__('filament-ccpa-breaches::filament-ccpa-breaches.actions.notify_attorney_general.description'))
            ->schema([
                TextInput::make('reference')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.attorney_general_reference')),
                DateTimePicker::make('at')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.notified_at'))
                    ->default(now())
                    ->required(),
            ])
            ->action(function (Breach $record, array $data): void {
                app(BreachManager::class)->notifyAttorneyGeneral($record, $data['reference'] ?? null, Labels::date($data['at']));
                static::done('notify_attorney_general');
            });
    }

    public static function close(): Action
    {
        return Action::make('close')
            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.actions.close.label'))
            ->icon('heroicon-o-check-circle')
            ->color('success')
            ->visible(fn (Breach $record): bool => $record->closed_at === null
                && $record->notification_required !== null
                && ! $record->owesResidentNotice()
                && ! $record->owesAttorneyGeneralNotice())
            ->requiresConfirmation()
            ->action(function (Breach $record): void {
                app(BreachManager::class)->close($record);
                static::done('close');
            });
    }

    protected static function done(string $action): void
    {
        Notification::make()->success()->title(__("filament-ccpa-breaches::filament-ccpa-breaches.actions.{$action}.success"))->send();
    }
}
