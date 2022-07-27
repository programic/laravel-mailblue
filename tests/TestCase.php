<?php

namespace Programic\MailBlue\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }
}
