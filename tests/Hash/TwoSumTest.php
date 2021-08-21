<?php

namespace Test\Hash;

use App\Hash\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    public function testSum()
    {
        $twoSum = new TwoSum();
        $result = $twoSum->twoSum([2, 7, 11, 15], 9);
        self::assertEquals([0, 1], $result);
    }

    public function testSum2()
    {
        $twoSum = new TwoSum();
        $result = $twoSum->twoSum([3, 2, 4], 6);
        self::assertEquals([1, 2], $result);
    }


    public function testSum3()
    {
        $twoSum = new TwoSum();
        $result = $twoSum->twoSum([3, 3], 6);
        self::assertEquals([0, 1], $result);
    }
}
