<?php

namespace Slvler\VeriphoneValidation\Managers;

use Slvler\VeriphoneValidation\Contracts\VeriphoneContract;
use Slvler\VeriphoneValidation\Phone;

class Veriphone implements VeriphoneContract
{

    protected string $base_url;
    protected string $secret_key;

    public function __construct(string $base_url, string $secret_key)
    {
        $this->base_url = $base_url;
        $this->secret_key = $secret_key;
    }

    public function get(string $phone)
    {
        return Phone::query($this->base_url, $this->secret_key, $phone);
    }

}
