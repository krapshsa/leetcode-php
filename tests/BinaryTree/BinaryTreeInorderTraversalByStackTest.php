<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\Tree\BinaryTreeInorderTraversalByStack;
use PHPUnit\Framework\TestCase;

class BinaryTreeInorderTraversalByStackTest extends TestCase
{    use Buildable;

    public function test1()
    {
        $rootNode = $this->buildBinaryTree([1, null, 2, 3]);
        $binaryTreePostorderTraversal = new BinaryTreeInorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->inorderTraversal($rootNode);
        self::assertEquals([1, 3, 2], $result);
    }

    public function test2()
    {
        $rootNode = $this->buildBinaryTree([1, 2]);
        $binaryTreePostorderTraversal = new BinaryTreeInorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->inorderTraversal($rootNode);
        self::assertEquals([2, 1], $result);
    }

    public function test3()
    {
        $rootNode = $this->buildBinaryTree([1, null, 2]);
        $binaryTreePostorderTraversal = new BinaryTreeInorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->inorderTraversal($rootNode);
        self::assertEquals([1, 2], $result);
    }

    public function testEmpty()
    {
        $rootNode = $this->buildBinaryTree([]);
        $binaryTreePostorderTraversal = new BinaryTreeInorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->inorderTraversal($rootNode);
        self::assertEquals([], $result);
    }

    public function testSingle()
    {
        $rootNode = $this->buildBinaryTree([1]);
        $binaryTreePostorderTraversal = new BinaryTreeInorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->inorderTraversal($rootNode);
        self::assertEquals([1], $result);
    }
}
