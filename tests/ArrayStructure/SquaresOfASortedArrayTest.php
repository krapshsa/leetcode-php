<?php

namespace Test\ArrayStructure;

use App\ArrayStructure\SquaresOfASortedArray;
use PHPUnit\Framework\TestCase;

class SquaresOfASortedArrayTest extends TestCase
{

    public function testSortedSquares()
    {
        $squaresOfASortedArray = new SquaresOfASortedArray();
        $result = $squaresOfASortedArray->sortedSquares([-7, -3, 2, 3, 11]);
        self::assertEquals([4, 9, 9, 49, 121], $result);
    }

    public function testSortedSquaresAllNegative()
    {
        $squaresOfASortedArray = new SquaresOfASortedArray();
        $result = $squaresOfASortedArray->sortedSquares([-7, -3]);
        self::assertEquals([9, 49], $result);
    }

    public function testSortedSquaresAllPositive()
    {
        $squaresOfASortedArray = new SquaresOfASortedArray();
        $result = $squaresOfASortedArray->sortedSquares([0, 1, 2]);
        self::assertEquals([0, 1, 4], $result);
    }
}
