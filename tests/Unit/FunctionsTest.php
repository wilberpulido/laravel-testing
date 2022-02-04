<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testEmail()
    {
        $result = validate_email('w@gmail.com');
        $this->assertTrue($result);
        $result = validate_email('w@@gmail.com');
        $this->assertFalse($result);
    }
}
