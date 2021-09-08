<?php

namespace Test\BinaryTree\StackAndQueue;

use App\BinaryTree\StackAndQueue\SlidingWindowMaximum;
use PHPUnit\Framework\TestCase;

class SlidingWindowMaximumTest extends TestCase
{
    public function testNormal()
    {
        $slidingWindowMaximum = new SlidingWindowMaximum();
        $result = $slidingWindowMaximum->maxSlidingWindow([1, 3, -1, -3, 5, 3, 6, 7], 3);
        self::assertEquals([3, 3, 5, 5, 6, 7], $result);
    }

    public function testSingle()
    {
        $slidingWindowMaximum = new SlidingWindowMaximum();
        $result = $slidingWindowMaximum->maxSlidingWindow([1], 1);
        self::assertEquals([1], $result);
    }

    public function testTwo()
    {
        $slidingWindowMaximum = new SlidingWindowMaximum();
        $result = $slidingWindowMaximum->maxSlidingWindow([1, -1], 1);
        self::assertEquals([1, -1], $result);
    }

    public function testTwoWithK2()
    {
        $slidingWindowMaximum = new SlidingWindowMaximum();
        $result = $slidingWindowMaximum->maxSlidingWindow([9, 11], 2);
        self::assertEquals([11], $result);
    }

    public function testTwoWithK2_2()
    {
        $slidingWindowMaximum = new SlidingWindowMaximum();
        $result = $slidingWindowMaximum->maxSlidingWindow([4, -2], 2);
        self::assertEquals([4], $result);
    }
}
