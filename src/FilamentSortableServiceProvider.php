<?php

namespace Savannabits\FilamentSortable;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentSortableServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-sortable';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-sortable' => __DIR__.'/../resources/dist/filament-sortable.css',
    ];

    protected array $scripts = [
        'plugin-filament-sortable' => __DIR__.'/../resources/dist/filament-sortable.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-sortable' => __DIR__ . '/../resources/dist/filament-sortable.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
