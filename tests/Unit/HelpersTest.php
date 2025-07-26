<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_mail_validation(): void
    {
        $response = mail_validation('sam@example.com');
        $this->assertTrue($response);

        $response = mail_validation('invalid-email');
        $this->assertFalse($response);
    }
}
