<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\Tree\BinaryTreePostorderTraversalByStack;
use PHPUnit\Framework\TestCase;

class BinaryTreePostorderTraversalByStackTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $rootNode = $this->buildBinaryTree([1, null, 2, 3]);
        $binaryTreePostorderTraversal = new BinaryTreePostorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->postorderTraversal($rootNode);
        self::assertEquals([3, 2, 1], $result);
    }

    public function test2()
    {
        $rootNode = $this->buildBinaryTree([1, 2]);
        $binaryTreePostorderTraversal = new BinaryTreePostorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->postorderTraversal($rootNode);
        self::assertEquals([2, 1], $result);
    }

    public function test3()
    {
        $rootNode = $this->buildBinaryTree([1, null, 2]);
        $binaryTreePostorderTraversal = new BinaryTreePostorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->postorderTraversal($rootNode);
        self::assertEquals([2, 1], $result);
    }

    public function testEmpty()
    {
        $rootNode = $this->buildBinaryTree([]);
        $binaryTreePostorderTraversal = new BinaryTreePostorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->postorderTraversal($rootNode);
        self::assertEquals([], $result);
    }

    public function testSingle()
    {
        $rootNode = $this->buildBinaryTree([1]);
        $binaryTreePostorderTraversal = new BinaryTreePostorderTraversalByStack();
        $result = $binaryTreePostorderTraversal->postorderTraversal($rootNode);
        self::assertEquals([1], $result);
    }
}
