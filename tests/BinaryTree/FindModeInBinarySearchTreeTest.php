<?php

namespace Test\BinaryTree;

use App\BinaryTree\FindModeInBinarySearchTree;
use PHPUnit\Framework\TestCase;

class FindModeInBinarySearchTreeTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([1, null, 2, 2]);
        $findModeInBinarySearchTree = new FindModeInBinarySearchTree();
        $result = $findModeInBinarySearchTree->findMode($root);
        self::assertEquals([2], $result);
    }

    public function test2()
    {
        $root = $this->buildBinaryTree([0]);
        $findModeInBinarySearchTree = new FindModeInBinarySearchTree();
        $result = $findModeInBinarySearchTree->findMode($root);
        self::assertEquals([0], $result);
    }

    public function test3()
    {
        $root = $this->buildBinaryTree([1, null, 2]);
        $findModeInBinarySearchTree = new FindModeInBinarySearchTree();
        $result = $findModeInBinarySearchTree->findMode($root);
        self::assertEquals([1, 2], $result);
    }

    public function test4()
    {
        $root = $this->buildBinaryTree([1, 0, 1, 0, 0, 1, 1, 0]);
        $findModeInBinarySearchTree = new FindModeInBinarySearchTree();
        $result = $findModeInBinarySearchTree->findMode($root);
        self::assertEquals([0, 1], $result);
    }
}
