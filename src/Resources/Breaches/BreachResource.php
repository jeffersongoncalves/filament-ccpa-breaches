<?php

namespace JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches;

use BackedEnum;
use Filament\Actions\ActionGroup;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Panel;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use JeffersonGoncalves\CcpaBreaches\Models\Breach;
use JeffersonGoncalves\Filament\CcpaBreaches\Actions\BreachActions;
use JeffersonGoncalves\Filament\CcpaBreaches\CcpaBreachesPlugin;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages\CreateBreach;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages\EditBreach;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages\ListBreaches;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages\ViewBreach;
use JeffersonGoncalves\Filament\CcpaBreaches\Support\Labels;

class BreachResource extends Resource
{
    protected static ?string $model = Breach::class;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('title')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.title'))
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                DateTimePicker::make('discovered_at')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.discovered_at'))
                    ->helperText(__('filament-ccpa-breaches::filament-ccpa-breaches.help.discovered_at'))
                    ->default(now())
                    ->required()
                    ->disabledOn('edit'),
                DateTimePicker::make('occurred_at')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.occurred_at')),
                Textarea::make('what_happened')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.what_happened'))
                    ->columnSpanFull(),
                TagsInput::make('data_categories')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.data_categories'))
                    ->helperText(__('filament-ccpa-breaches::filament-ccpa-breaches.help.data_categories')),
                TextInput::make('affected_residents')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.affected_residents'))
                    ->numeric()
                    ->minValue(0),
                Toggle::make('encrypted')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.encrypted'))
                    ->helperText(__('filament-ccpa-breaches::filament-ccpa-breaches.help.encrypted'))
                    ->columnSpanFull(),
                Textarea::make('what_we_are_doing')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.what_we_are_doing')),
                Textarea::make('what_you_can_do')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.what_you_can_do')),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make()
                    ->columns(2)
                    ->schema([
                        TextEntry::make('title')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.title'))
                            ->columnSpanFull(),
                        TextEntry::make('status')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.status'))
                            ->state(fn (Breach $record): string => Labels::status($record))
                            ->formatStateUsing(fn (string $state): string => __("filament-ccpa-breaches::filament-ccpa-breaches.status.{$state}"))
                            ->badge()
                            ->color(fn (string $state): string => Labels::statusColor($state)),
                        TextEntry::make('notification')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.notification_required'))
                            ->state(fn (Breach $record): string => Labels::notification($record->notification_required))
                            ->badge()
                            ->color(fn (Breach $record): string => Labels::notificationColor($record->notification_required)),
                        TextEntry::make('discovered_at')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.discovered_at'))
                            ->dateTime(),
                        TextEntry::make('due_at')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.due_at'))
                            ->dateTime()
                            ->placeholder('-')
                            ->color(fn (Breach $record): ?string => $record->isOverdue() ? 'danger' : null),
                        TextEntry::make('occurred_at')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.occurred_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('affected_residents')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.affected_residents'))
                            ->placeholder('-'),
                        TextEntry::make('data_categories')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.data_categories'))
                            ->badge()
                            ->placeholder('-'),
                        IconEntry::make('encrypted')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.encrypted'))
                            ->boolean(),
                        TextEntry::make('law_enforcement_delay')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.law_enforcement_delay'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('residents_notified_at')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.residents_notified_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        IconEntry::make('substitute_notice')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.substitute_notice'))
                            ->boolean(),
                        TextEntry::make('attorney_general_notified_at')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.attorney_general_notified_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('attorney_general_reference')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.attorney_general_reference'))
                            ->placeholder('-'),
                        TextEntry::make('closed_at')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.closed_at'))
                            ->dateTime()
                            ->placeholder('-'),
                        TextEntry::make('what_happened')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.what_happened'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('assessment')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.assessment'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('what_we_are_doing')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.what_we_are_doing'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                        TextEntry::make('what_you_can_do')
                            ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.what_you_can_do'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.title'))
                    ->searchable()
                    ->limit(50),
                TextColumn::make('status')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.status'))
                    ->state(fn (Breach $record): string => Labels::status($record))
                    ->formatStateUsing(fn (string $state): string => __("filament-ccpa-breaches::filament-ccpa-breaches.status.{$state}"))
                    ->badge()
                    ->color(fn (string $state): string => Labels::statusColor($state)),
                TextColumn::make('notification')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.notification_required'))
                    ->state(fn (Breach $record): string => Labels::notification($record->notification_required))
                    ->badge()
                    ->color(fn (Breach $record): string => Labels::notificationColor($record->notification_required)),
                TextColumn::make('discovered_at')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.discovered_at'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('due_at')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.due_at'))
                    ->dateTime()
                    ->placeholder('-')
                    ->sortable()
                    ->color(fn (Breach $record): ?string => $record->isOverdue() ? 'danger' : null),
                IconColumn::make('residents')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.residents'))
                    ->state(fn (Breach $record): bool => $record->residents_notified_at !== null)
                    ->boolean(),
                IconColumn::make('attorney_general')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.attorney_general'))
                    ->state(fn (Breach $record): bool => $record->attorney_general_notified_at !== null)
                    ->boolean(),
            ])
            ->defaultSort('discovered_at', 'desc')
            ->filters([
                Filter::make('pending')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.status.pending'))
                    ->query(fn (Builder $query): Builder => $query->scopes('pending')),
                Filter::make('overdue')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.status.overdue'))
                    ->query(fn (Builder $query): Builder => $query->scopes('overdue')),
                TernaryFilter::make('notification_required')
                    ->label(__('filament-ccpa-breaches::filament-ccpa-breaches.fields.notification_required')),
            ])
            ->recordActions([
                ViewAction::make(),
                ActionGroup::make([EditAction::make(), ...BreachActions::all()]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBreaches::route('/'),
            'create' => CreateBreach::route('/create'),
            'view' => ViewBreach::route('/{record}'),
            'edit' => EditBreach::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('filament-ccpa-breaches::filament-ccpa-breaches.resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-ccpa-breaches::filament-ccpa-breaches.resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return CcpaBreachesPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return CcpaBreachesPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return CcpaBreachesPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(?Panel $panel = null): string
    {
        return CcpaBreachesPlugin::get()->getSlug();
    }

    public static function getNavigationBadge(): ?string
    {
        $pending = Breach::query()->scopes('pending')->count();

        return $pending > 0 ? (string) $pending : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return Breach::query()->scopes('overdue')->exists() ? 'danger' : 'warning';
    }
}
