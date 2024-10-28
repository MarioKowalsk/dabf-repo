<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UnitTest1 extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertArrayIsIdenticalToArrayOnlyConsideringListOfKeys(
            [
                'id' => 1,
                'name' => 'John',
                'check' => 'foo',
                'check2' => 42,
                'key' => 'key'
            ],
            [
                'id' => 2,
                'name' => 'Doe',
                'check' => 'foo',
                'check2' => 42,
                'key' => 'pass'
            ],
            [
                'check', 'check2'
            ]
        );
    }
}
