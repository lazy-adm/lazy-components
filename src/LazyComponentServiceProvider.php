<?php

namespace Lazyadm\LazyComponent;

use Lazyadm\LazyComponent\Commands\LazyComponentCommand;
use Lazyadm\LazyComponent\Components\Badge;
use Lazyadm\LazyComponent\Components\Checkbox;
use Lazyadm\LazyComponent\Components\Divider;
use Lazyadm\LazyComponent\Components\Label;
use Lazyadm\LazyComponent\Components\Toggle;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LazyComponentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lazy')
            ->hasConfigFile('lazy-component')
            ->hasViews('lazy')
            ->hasTranslations()
            ->hasViewComponents('lazy',
                Badge::class,
                Checkbox::class,
                Divider::class,
//                Dropdown::class,
                Label::class,
//                Radio::class,
//                Select::class,
                Toggle::class,
            )
//            ->hasAssets()
//            ->publishesServiceProvider($nameOfYourServiceProvider)
//            ->hasRoutes(['web', 'admin'])
//            ->hasMigration('create_lazy-component_table')
            ->hasCommand(LazyComponentCommand::class);
    }
}
