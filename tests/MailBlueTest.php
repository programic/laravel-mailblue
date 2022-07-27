<?php

namespace Programic\MailBlue\Tests;

use Illuminate\Http\Client\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Programic\MailBlue\MailBlue;
use Programic\MailBlue\MailBlueServiceProvider;

class MailBlueTest extends TestCase
{
    /** @var MailBlue $mailblue */
    protected $mailblue;
    protected $baseURL = 'https://localhost';

    public function setUp(): void
    {
        parent::setUp();
        $baseURL = $this->baseURL;
        Http::macro('mailblue', fn () => Http::fake()->baseUrl($baseURL));

        $this->mailblue = app('mailblue');
    }

    protected function getPackageProviders($app)
    {
        return [
            MailBlueServiceProvider::class,
        ];
    }

    /** @test */
    public function itCanDoGetRequest()
    {
        $response = $this->mailblue->get('test', [
            'param' => 'get parameter',
        ]);

        Http::assertSent(function (Request $request) {
            return $request->url() === "{$this->baseURL}/test?param=get%20parameter"
                && $request->method() === 'GET'
                && $request['param'] === 'get parameter';
        });

        $this->assertInstanceOf(Response::class, $response);
    }

    /** @test */
    public function itCanDoPostRequest()
    {
        $response = $this->mailblue->post('test', [
            'param' => 'post parameter',
        ]);

        Http::assertSent(function (Request $request) {
            return $request->url() === "{$this->baseURL}/test"
                && $request->method() === 'POST'
                && $request['param'] === 'post parameter';
        });

        $this->assertInstanceOf(Response::class, $response);
    }

    /** @test */
    public function itCanDoDeleteRequest()
    {
        $response = $this->mailblue->delete('test', [
            'param' => 'delete parameter',
        ]);

        Http::assertSent(function (Request $request) {
            return $request->url() === "{$this->baseURL}/test"
                && $request->method() === 'DELETE'
                && $request['param'] === 'delete parameter';
        });

        $this->assertInstanceOf(Response::class, $response);
    }

    /** @test */
    public function itCanDoPutRequest()
    {
        $response = $this->mailblue->put('test', [
            'param' => 'put parameter',
        ]);

        Http::assertSent(function (Request $request) {
            return $request->url() === "{$this->baseURL}/test"
                && $request->method() === 'PUT'
                && $request['param'] === 'put parameter';
        });

        $this->assertInstanceOf(Response::class, $response);
    }
}
