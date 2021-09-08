<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\SumOfLeftLeaves;
use PHPUnit\Framework\TestCase;

class SumOfLeftLeavesTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([3, 9, 20, null, null, 15, 7]);
        $sumOfLeftLeaves = new SumOfLeftLeaves();
        $result = $sumOfLeftLeaves->sumOfLeftLeaves($root);
        self::assertEquals(24, $result);
    }

    public function test2()
    {
        $root = $this->buildBinaryTree([1, 2, 3, 4, 5]);
        $sumOfLeftLeaves = new SumOfLeftLeaves();
        $result = $sumOfLeftLeaves->sumOfLeftLeaves($root);
        self::assertEquals(4, $result);
    }
}
