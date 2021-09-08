<?php

namespace Test\BinaryTree\Hash;

use App\BinaryTree\Hash\FourSumII;
use PHPUnit\Framework\TestCase;

class FourSumIITest extends TestCase
{
    public function testTwo()
    {
        $fourSumII = new FourSumII();
        $result = $fourSumII->fourSumCount([1, 2], [-2, -1], [-1, 2], [0, 2]);
        self::assertEquals(2, $result);
    }

    public function testOne()
    {
        $fourSumII = new FourSumII();
        $result = $fourSumII->fourSumCount([0], [0], [0], [0]);
        self::assertEquals(1, $result);
    }

}
