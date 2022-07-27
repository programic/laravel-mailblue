<?php

namespace Programic\MailBlue;

use Illuminate\Http\Client\Response;
use Programic\MailBlue\Http\Request;

class MailBlue
{
    protected Request $http;

    public function __construct()
    {
        $this->http = new Request();
    }

    public function get(string $url, array $queryParams = []): Response
    {
        return $this->http->get($url, $queryParams);
    }

    public function post(string $url, array $postParams = []): Response
    {
        return $this->http->post($url, $postParams);
    }

    public function delete(string $url, array $queryParams = []): Response
    {
        return $this->http->delete($url, $queryParams);
    }

    public function put(string $url, array $postParams = []): Response
    {
        return $this->http->put($url, $postParams);
    }
}
