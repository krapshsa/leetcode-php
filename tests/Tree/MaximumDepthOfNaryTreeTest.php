<?php

namespace Test\BinaryTree\Tree;

use App\BinaryTree\Tree\MaximumDepthOfNaryTree;
use PHPUnit\Framework\TestCase;

class MaximumDepthOfNaryTreeTest extends TestCase
{
    use Buildable;

    public function test3()
    {
        $root = $this->buildTree([1, null, 3, 2, 4, null, 5, 6]);
        $maximumDepthOfNaryTree = new MaximumDepthOfNaryTree();
        $maxDepth = $maximumDepthOfNaryTree->maxDepth($root);
        self::assertEquals(3, $maxDepth);
    }

    public function test5()
    {
        $root = $this->buildTree([1, null, 2, 3, 4, 5, null, null, 6, 7, null, 8, null, 9, 10, null, null, 11, null, 12, null, 13, null, null, 14]);
        $maximumDepthOfNaryTree = new MaximumDepthOfNaryTree();
        $maxDepth = $maximumDepthOfNaryTree->maxDepth($root);
        self::assertEquals(5, $maxDepth);
    }
}
