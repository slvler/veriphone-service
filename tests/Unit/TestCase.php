<?php

namespace Slvler\VeriphoneValidation\Tests\Unit;

use Slvler\VeriphoneValidation\VeriphoneValidationServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            VeriphoneValidationServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
    }
}
