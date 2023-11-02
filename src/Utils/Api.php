<?php

namespace Slvler\VeriphoneValidation\Utils;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class Api
{
    protected ClientInterface $http;

    protected array $options = [];

    public function __construct()
    {
        $this->http = new Client();
        $this->options = [
            'http_errors' => false,
        ];
    }

    public static function build(): self
    {
        return new static();
    }

    public function baseUrl(string $url): self
    {
        $this->options['base_uri'] = $url;

        return $this;
    }

    public function query(array $parameters): self
    {
        $this->options['query'] = $parameters;

        return $this;
    }

    public function get(string $url)
    {
        return $this->send('GET', $url);
    }

    protected function send(string $method, string $url)
    {

        $response = $this->http->request($method, $url, $this->options);

        $statuscode = $response->getStatusCode();
        if ($statuscode == 200) {
            return $response->getBody()->getContents();
        }
    }

}
