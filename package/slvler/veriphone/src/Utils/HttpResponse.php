<?php declare(strict_types=1);

namespace Slvler\VeriphoneValidation\Utils;

class HttpResponse
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getBody()
    {
        return $this->response->getBody()->getContents();
    }

    public function toObject(): object
    {
        $body = (string) $this->response->getBody()->getContents();

        return json_decode($body) ?? (object) [];
    }
}
