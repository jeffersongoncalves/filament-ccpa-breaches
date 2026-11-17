<?php

namespace JeffersonGoncalves\Filament\CcpaBreaches;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaBreachesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-ccpa-breaches')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
