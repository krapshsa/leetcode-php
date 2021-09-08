<?php

namespace Test\BinaryTree\Backtracking;

use App\BinaryTree\Backtracking\Combinations;
use PHPUnit\Framework\TestCase;

class CombinationsTest extends TestCase
{
    public function test1()
    {
        $combinations = new Combinations();
        $result = $combinations->combine(4, 2);
        self::assertEquals(
            [
                [1, 2],
                [1, 3],
                [1, 4],
                [2, 3],
                [2, 4],
                [3, 4],
            ],
            $result
        );
    }

    public function test2()
    {
        $combinations = new Combinations();
        $result = $combinations->combine(1, 1);
        self::assertEquals(
            [
                [1]
            ],
            $result
        );
    }
}
