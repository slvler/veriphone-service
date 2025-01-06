<?php

namespace Slvler\VeriphoneValidation\Exception;

use InvalidArgumentException;

class MissingApiKey extends InvalidArgumentException
{
    public static function create(): self
    {
        return new self(
            'The Veriphone API Key is missing. Please publish the [veriphone.php] configuration file and set the [api_key].'
        );
    }
}
