<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\MinimumDepthOfBinaryTree;
use PHPUnit\Framework\TestCase;

class MinimumDepthOfBinaryTreeTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([3, 9, 20, null, null, 15, 7]);
        $minimumDepthOfBinaryTree = new MinimumDepthOfBinaryTree();
        $result = $minimumDepthOfBinaryTree->minDepth($root);
        self::assertEquals(2, $result);
    }

    public function test2()
    {
        $root = $this->buildBinaryTree([2, null, 3, null, 4, null, 5, null, 6]);
        $minimumDepthOfBinaryTree = new MinimumDepthOfBinaryTree();
        $result = $minimumDepthOfBinaryTree->minDepth($root);
        self::assertEquals(5, $result);
    }

    public function testEmpty()
    {
        $root = $this->buildBinaryTree([]);
        $minimumDepthOfBinaryTree = new MinimumDepthOfBinaryTree();
        $result = $minimumDepthOfBinaryTree->minDepth($root);
        self::assertEquals(0, $result);
    }

    public function test4()
    {
        $root = $this->buildBinaryTree([1]);
        $minimumDepthOfBinaryTree = new MinimumDepthOfBinaryTree();
        $result = $minimumDepthOfBinaryTree->minDepth($root);
        self::assertEquals(1, $result);
    }
}
