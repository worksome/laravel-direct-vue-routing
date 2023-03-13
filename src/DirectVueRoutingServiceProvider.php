<?php

declare(strict_types=1);

namespace Worksome\DirectVueRouting;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DirectVueRoutingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-direct-vue-routing')
            ->hasViews();
    }

    public function packageBooted(): void
    {
        $view = $this->app->make(Factory::class);
        $response = $this->app->make(ResponseFactory::class);

        $response->macro(
            'vue',
            fn (string $vueComponentName, array $props = []) => $view->make('direct-vue-routing::vue-component', [
                'vueComponentName' => $vueComponentName,
                'props' => $props,
            ])
        );
    }
}
