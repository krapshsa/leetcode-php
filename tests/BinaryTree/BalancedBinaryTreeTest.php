<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\BalancedBinaryTree;
use PHPUnit\Framework\TestCase;

class BalancedBinaryTreeTest extends TestCase
{
    use Buildable;
    public function testBalanced()
    {
        $root = $this->buildBinaryTree([3, 9, 20, null, null, 15, 7]);
        $balancedBinaryTree = new BalancedBinaryTree();
        $result = $balancedBinaryTree->isBalanced($root);
        self::assertEquals(true, $result);
    }

    public function testUnbalanced()
    {
        $root = $this->buildBinaryTree([1,2,2,3,3,null,null,4,4]);
        $balancedBinaryTree = new BalancedBinaryTree();
        $result = $balancedBinaryTree->isBalanced($root);
        self::assertEquals(false, $result);
    }
}
