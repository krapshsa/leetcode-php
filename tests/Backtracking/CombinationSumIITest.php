<?php

namespace Test\BinaryTree\Backtracking;

use App\BinaryTree\Backtracking\CombinationSumII;
use PHPUnit\Framework\TestCase;

class CombinationSumIITest extends TestCase
{
    public function test1()
    {
        $combinationSumII = new CombinationSumII();
        $result = $combinationSumII->combinationSum2([10, 1, 2, 7, 6, 1, 5], 8);
        self::assertEquals(
            [
                [1, 1, 6],
                [1, 2, 5],
                [1, 7],
                [2, 6]
            ],
            $result
        );
    }

    public function test2()
    {
        $combinationSumII = new CombinationSumII();
        $result = $combinationSumII->combinationSum2([2, 5, 2, 1, 2], 5);
        self::assertEquals(
            [
                [1, 2, 2],
                [5]
            ],
            $result
        );
    }
}
