<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UnorderedListTest extends TestCase
{
    /**
     * A basic unit test to test if two arrays have the same elements.
     */
    public function test_number_list_unordered(): void
    {
        $this->assertEqualsCanonicalizing([3, 6, 2, 7, 8, 1, 9, 5, 4, 10],[10, 9, 8, 7, 6, 5, 4, 3, 2, 1]);
    }
}
