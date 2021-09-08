<?php

namespace Test\BinaryTree\Hash;

use App\BinaryTree\DynamicProgramming\ThreeSum;
use PHPUnit\Framework\TestCase;

class ThreeSumTest extends TestCase
{
    public function testNormal()
    {
        $threeSum = new ThreeSum();
        $result = $threeSum->threeSum([-1, 0, 1, 2, -1, -4]);
        self::assertEquals([[-1, -1, 2], [-1, 0, 1]], $result);
    }

    public function testSingle()
    {
        $threeSum = new ThreeSum();
        $result = $threeSum->threeSum([0]);
        self::assertEquals([], $result);
    }

    public function testEmpty()
    {
        $threeSum = new ThreeSum();
        $result = $threeSum->threeSum([]);
        self::assertEquals([], $result);
    }
}
