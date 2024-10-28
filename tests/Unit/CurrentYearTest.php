<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CurrentYearTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_older_2000(): void
    {
        $this->assertTrue(date("Y") > 2000);
    }
    public function test_false_youger_than_2024(): void
    {
        $this->assertFalse(date("Y") < 2024);
    }
}
