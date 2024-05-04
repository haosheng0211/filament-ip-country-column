<?php

namespace HaoSheng\IpCountryColumn;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class IpCountryColumnServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-ip-country-column';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews();
    }
}
