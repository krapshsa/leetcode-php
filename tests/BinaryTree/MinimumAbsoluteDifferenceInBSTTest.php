<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\MinimumAbsoluteDifferenceInBST;
use PHPUnit\Framework\TestCase;

class MinimumAbsoluteDifferenceInBSTTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([4, 2, 6, 1, 3]);
        $minimumAbsoluteDifferenceInBST = new MinimumAbsoluteDifferenceInBST();
        $result = $minimumAbsoluteDifferenceInBST->getMinimumDifference($root);
        self::assertEquals(1, $result);
    }

    public function test2()
    {
        $root = $this->buildBinaryTree([1, 0, 48, null, null, 12, 49]);
        $minimumAbsoluteDifferenceInBST = new MinimumAbsoluteDifferenceInBST();
        $result = $minimumAbsoluteDifferenceInBST->getMinimumDifference($root);
        self::assertEquals(1, $result);
    }
}
