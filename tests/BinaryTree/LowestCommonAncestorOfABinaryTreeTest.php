<?php

namespace Test\BinaryTree;

use App\BinaryTree\LowestCommonAncestorOfABinaryTree;
use App\BinaryTree\TreeNode;
use PHPUnit\Framework\TestCase;

class LowestCommonAncestorOfABinaryTreeTest extends TestCase
{
    use Buildable;

    public function test3()
    {
        $root = $this->buildBinaryTree([3, 5, 1, 6, 2, 0, 8, null, null, 7, 4]);
        $p = new TreeNode(5);
        $q = new TreeNode(1);
        $lowestCommonAncestorOfABinaryTree = new LowestCommonAncestorOfABinaryTree();
        $result = $lowestCommonAncestorOfABinaryTree->lowestCommonAncestor($root, $p, $q);
        self::assertEquals(3, $result->val);
    }


    public function test5()
    {
        $root = $this->buildBinaryTree([3, 5, 1, 6, 2, 0, 8, null, null, 7, 4]);
        $p = new TreeNode(5);
        $q = new TreeNode(4);
        $lowestCommonAncestorOfABinaryTree = new LowestCommonAncestorOfABinaryTree();
        $result = $lowestCommonAncestorOfABinaryTree->lowestCommonAncestor($root, $p, $q);
        self::assertEquals(5, $result->val);
    }

    public function test1()
    {
        $root = $this->buildBinaryTree([1, 2]);
        $p = new TreeNode(1);
        $q = new TreeNode(2);
        $lowestCommonAncestorOfABinaryTree = new LowestCommonAncestorOfABinaryTree();
        $result = $lowestCommonAncestorOfABinaryTree->lowestCommonAncestor($root, $p, $q);
        self::assertEquals(1, $result->val);
    }
}
