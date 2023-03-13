<?php

namespace Worksome\DirectVueRouting\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Worksome\DirectVueRouting\DirectVueRoutingServiceProvider;

class TestCase extends Orchestra
{
    /** {@inheritdoc} */
    protected function getPackageProviders($app): array
    {
        return [
            DirectVueRoutingServiceProvider::class,
        ];
    }
}
