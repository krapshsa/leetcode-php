<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\MaximumBinaryTree;
use PHPUnit\Framework\TestCase;

class MaximumBinaryTreeTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $maximumBinaryTree = new MaximumBinaryTree();
        $result = $maximumBinaryTree->constructMaximumBinaryTree([3, 2, 1, 6, 0, 5]);
        self::assertEquals([6, 3, 5, null, 2, 0, null, null, 1], $this->getLevelOrderValues($result));
    }

    public function test2()
    {
        $maximumBinaryTree = new MaximumBinaryTree();
        $result = $maximumBinaryTree->constructMaximumBinaryTree([3, 2, 1]);
        self::assertEquals([3, null, 2, null, 1], $this->getLevelOrderValues($result));
    }
}
