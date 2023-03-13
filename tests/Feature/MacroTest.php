<?php

use Illuminate\Contracts\Routing\ResponseFactory;

it('can use `vue()` macro', function () {
    $response = $this->app->make(ResponseFactory::class);

    $content = $response->vue('TestComponent');

    expect($content)
        ->name()->toBe('direct-vue-routing::vue-component')
        ->getData()->toBeArray()->toEqual([
            'vueComponentName' => 'TestComponent',
            'props' => [],
        ]);
});

it('can use `vue()` macro with prop data', function () {
    $response = $this->app->make(ResponseFactory::class);

    $content = $response->vue('TestComponent', [
        'testProp' => 'MyPropData',
    ]);

    expect($content)
        ->name()->toBe('direct-vue-routing::vue-component')
        ->getData()->toBeArray()->toEqual([
            'vueComponentName' => 'TestComponent',
            'props' => [
                'testProp' => 'MyPropData',
            ],
        ]);
});
