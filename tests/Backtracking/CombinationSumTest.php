<?php

namespace Test\BinaryTree\Backtracking;

use App\BinaryTree\Backtracking\CombinationSum;
use PHPUnit\Framework\TestCase;

class CombinationSumTest extends TestCase
{
    public function test1()
    {
        $combinationSum = new CombinationSum();
        $result = $combinationSum->combinationSum([2, 3, 6, 7], 7);
        var_dump($result);
        self::assertEquals([[2, 2, 3], [7]], $result);
    }

    public function test2()
    {
        $combinationSum = new CombinationSum();
        $result = $combinationSum->combinationSum([2, 3, 5], 8);
        self::assertEquals([[2, 2, 2, 2], [2, 3, 3], [3, 5]], $result);
    }

    public function test3()
    {
        $combinationSum = new CombinationSum();
        $result = $combinationSum->combinationSum([2], 1);
        self::assertEquals([], $result);
    }

    public function test4()
    {
        $combinationSum = new CombinationSum();
        $result = $combinationSum->combinationSum([1], 1);
        self::assertEquals([[1]], $result);
    }

    public function test5()
    {
        $combinationSum = new CombinationSum();
        $result = $combinationSum->combinationSum([1], 2);
        self::assertEquals([[1, 1]], $result);
    }
}
