<?php

namespace Test\BinaryTree\Hash;

use App\BinaryTree\DynamicProgramming\FourSum;
use PHPUnit\Framework\TestCase;

class FourSumTest extends TestCase
{
    public function testNormal()
    {
        $fourSum = new FourSum();
        $result = $fourSum->fourSum([1, 0, -1, 0, -2, 2], 0);
        self::assertEquals([[-2, -1, 1, 2], [-2, 0, 0, 2], [-1, 0, 0, 1]], $result);
    }


    public function testNormal2()
    {
        $fourSum = new FourSum();
        $result = $fourSum->fourSum([2, 2, 2, 2, 2], 8);
        self::assertEquals([[2, 2, 2, 2]], $result);
    }

    public function testNormal3()
    {
        $fourSum = new FourSum();
        $result = $fourSum->fourSum([1, -2, -5, -4, -3, 3, 3, 5], -11);
        self::assertEquals([[-5, -4, -3, 1]], $result);
    }
}
