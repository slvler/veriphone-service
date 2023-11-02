<?php

namespace Slvler\VeriphoneValidation\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Slvler\VeriphoneValidation\Facedes\VeriphoneValidation;
use Slvler\VeriphoneValidation\Tests\Unit\TestCase;

class VeriphoneValidationTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp();

        Config::set([
            'veriphone.veriphone.base_url' => 'https://api.veriphone.io/',
            'veriphone.veriphone.api_key' => '9E2CDBCB1D6543C4A2A21C0906181FC2',
        ]);
    }

    /**
     * @test
     */
    public function test_get()
    {
        $this->assertIsString(VeriphoneValidation::get("05012345678"));
    }

}
