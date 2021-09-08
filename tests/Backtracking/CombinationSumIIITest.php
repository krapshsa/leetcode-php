<?php

namespace Test\BinaryTree\Backtracking;

use App\BinaryTree\Backtracking\CombinationSumIII;
use PHPUnit\Framework\TestCase;

class CombinationSumIIITest extends TestCase
{
    public function test1()
    {
        $combinationSumIII = new CombinationSumIII();
        $result = $combinationSumIII->combinationSum3(3, 7);
        self::assertEquals([[1, 2, 4]], $result);
    }


    public function test2()
    {
        $combinationSumIII = new CombinationSumIII();
        $result = $combinationSumIII->combinationSum3(3, 9);
        self::assertEquals([[1, 2, 6], [1, 3, 5], [2, 3, 4]], $result);
    }

    public function test3()
    {
        $combinationSumIII = new CombinationSumIII();
        $result = $combinationSumIII->combinationSum3(4, 1);
        self::assertEquals([], $result);
    }

    public function test4()
    {
        $combinationSumIII = new CombinationSumIII();
        $result = $combinationSumIII->combinationSum3(3, 2);
        self::assertEquals([], $result);
    }

    public function test5()
    {
        $combinationSumIII = new CombinationSumIII();
        $result = $combinationSumIII->combinationSum3(9, 45);
        self::assertEquals([[1, 2, 3, 4, 5, 6, 7, 8, 9]], $result);
    }
}
