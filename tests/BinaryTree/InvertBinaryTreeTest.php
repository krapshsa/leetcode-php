<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\InvertBinaryTree;
use PHPUnit\Framework\TestCase;

class InvertBinaryTreeTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([4, 2, 7, 1, 3, 6, 9]);
        $revertedRoot = $this->buildBinaryTree([4, 7, 2, 9, 6, 3, 1]);
        $invertBinaryTree = new InvertBinaryTree();
        $result = $invertBinaryTree->invertTree($root);
        self::assertEquals($revertedRoot, $result);
    }

    public function test2()
    {
        $root = $this->buildBinaryTree([2, 1, 3]);
        $revertedRoot = $this->buildBinaryTree([2, 3, 1]);
        $invertBinaryTree = new InvertBinaryTree();
        $result = $invertBinaryTree->invertTree($root);
        self::assertEquals($revertedRoot, $result);
    }

    public function testEmpty()
    {
        $root = $this->buildBinaryTree([]);
        $revertedRoot = $this->buildBinaryTree([]);
        $invertBinaryTree = new InvertBinaryTree();
        $result = $invertBinaryTree->invertTree($root);
        self::assertEquals($revertedRoot, $result);
    }
}
