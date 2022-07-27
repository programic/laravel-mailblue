<?php

namespace Programic\MailBlue\Tests;

use Programic\MailBlue\MailBlue;
use Programic\MailBlue\MailBlueServiceProvider;

class ServiceProviderTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            MailBlueServiceProvider::class,
        ];
    }

    /** @test */
    public function itRegistersMailblueAsSingleton()
    {
        $mailblue1 = app(MailBlue::class);
        $mailblue2 = app(MailBlue::class);
        $this->assertTrue($mailblue1 === $mailblue2);
    }

    /** @test */
    public function itRegistersMailblueAlias()
    {
        $this->assertInstanceOf(MailBlue::class, app('mailblue'));
    }
}
