<?php

namespace JeffersonGoncalves\Filament\CcpaBreaches\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\CcpaBreaches\CcpaBreachesPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CcpaBreachesPlugin::make(),
            ]);
    }
}
