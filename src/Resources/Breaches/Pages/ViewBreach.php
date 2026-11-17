<?php

namespace JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use JeffersonGoncalves\Filament\CcpaBreaches\Actions\BreachActions;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\BreachResource;

class ViewBreach extends ViewRecord
{
    protected static string $resource = BreachResource::class;

    protected function getHeaderActions(): array
    {
        return [...BreachActions::all(), EditAction::make()];
    }
}
