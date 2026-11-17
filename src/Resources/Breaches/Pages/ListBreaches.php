<?php

namespace JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\CcpaBreaches\Resources\Breaches\BreachResource;

class ListBreaches extends ListRecords
{
    protected static string $resource = BreachResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
