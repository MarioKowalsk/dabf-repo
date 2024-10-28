<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class IdenticalArrayTest extends TestCase
{
    /**
     * A basic unit test to test if some fields of two arrays are the same.
     */
    public function test_array_list(): void
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
