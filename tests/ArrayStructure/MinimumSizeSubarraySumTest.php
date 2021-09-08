<?php

namespace Test\BinaryTree\ArrayStructure;

use App\BinaryTree\ArrayStructure\MinimumSizeSubarraySum;
use PHPUnit\Framework\TestCase;

class MinimumSizeSubarraySumTest extends TestCase
{
    public function testExists()
    {
        $minimumSizeSubarraySum = new MinimumSizeSubarraySum();
        $result = $minimumSizeSubarraySum->minSubArrayLen(7, [2, 3, 1, 2, 4, 3]);
        self::assertEquals(2, $result);
    }


    public function testExists2()
    {
        $minimumSizeSubarraySum = new MinimumSizeSubarraySum();
        $result = $minimumSizeSubarraySum->minSubArrayLen(4, [1, 4, 4]);
        self::assertEquals(1, $result);
    }

    public function testExists3()
    {
        $minimumSizeSubarraySum = new MinimumSizeSubarraySum();
        $result = $minimumSizeSubarraySum->minSubArrayLen(11, [1, 2, 3, 4, 5]);
        self::assertEquals(3, $result);
    }

    public function testNonExists()
    {
        $minimumSizeSubarraySum = new MinimumSizeSubarraySum();
        $result = $minimumSizeSubarraySum->minSubArrayLen(11, [1, 1, 1, 1, 1, 1, 1, 1]);
        self::assertEquals(0, $result);
    }

}
