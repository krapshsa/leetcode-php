<?php

namespace Test\DynamicProgramming;

use App\DynamicProgramming\CountingBits;
use PHPUnit\Framework\TestCase;

class CountingBitsTest extends TestCase
{
    public function testTwo()
    {
        $countingBits = new CountingBits();
        $results = $countingBits->countBits(2);
        self::assertEquals([0, 1, 1], $results);
    }

    public function testFive()
    {
        $countingBits = new CountingBits();
        $results = $countingBits->countBits(5);
        self::assertEquals([0, 1, 1, 2, 1, 2], $results);
    }
}
