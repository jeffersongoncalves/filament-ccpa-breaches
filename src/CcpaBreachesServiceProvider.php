<?php

namespace JeffersonGoncalves\Filament\CcpaBreaches;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CcpaBreachesServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-ccpa-breaches';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
