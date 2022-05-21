<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function testEnvNotExistingKey()
    {
        $variable = env('UNEXISTING_KEY', 'default_value');
        //$variable = env('APP_NAME', 'default_value');
        $this->assertEquals('default_value', $variable);
    }
}
