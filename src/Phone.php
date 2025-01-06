<?php

namespace Slvler\VeriphoneValidation;

use Slvler\VeriphoneValidation\Exception\MissingApiKey;
use Slvler\VeriphoneValidation\Utils\Api;

class Phone
{
    public static function query($base_url, $secret_key, $phone)
    {
        $apiKey = config('veriphone.veriphone.api_key');

        if (empty($apiKey) || ! isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $response = Api::build()
            ->baseUrl($base_url)
            ->query(['key' => $secret_key, 'phone' => $phone])
            ->get('v2/verify');
       return $response;
    }
}
