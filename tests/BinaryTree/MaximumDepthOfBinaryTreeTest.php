<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\MaximumDepthOfBinaryTree;
use PHPUnit\Framework\TestCase;

class MaximumDepthOfBinaryTreeTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([3, 9, 20, null, null, 15, 7]);
        $maximumDepthOfBinaryTree = new MaximumDepthOfBinaryTree();
        $result = $maximumDepthOfBinaryTree->maxDepth($root);
        self::assertEquals(3, $result);
    }

    public function test2()
    {
        $root = $this->buildBinaryTree([1, null, 2]);
        $maximumDepthOfBinaryTree = new MaximumDepthOfBinaryTree();
        $result = $maximumDepthOfBinaryTree->maxDepth($root);
        self::assertEquals(2, $result);
    }

    public function test3()
    {
        $root = $this->buildBinaryTree([0]);
        $maximumDepthOfBinaryTree = new MaximumDepthOfBinaryTree();
        $result = $maximumDepthOfBinaryTree->maxDepth($root);
        self::assertEquals(1, $result);
    }

    public function testEmpty()
    {
        $root = $this->buildBinaryTree([]);
        $maximumDepthOfBinaryTree = new MaximumDepthOfBinaryTree();
        $result = $maximumDepthOfBinaryTree->maxDepth($root);
        self::assertEquals(0, $result);
    }
}
