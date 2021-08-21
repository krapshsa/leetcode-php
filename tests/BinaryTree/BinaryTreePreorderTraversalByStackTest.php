<?php

namespace Test\BinaryTree;

use App\BinaryTree\BinaryTreePreorderTraversalByStack;
use PHPUnit\Framework\TestCase;

class BinaryTreePreorderTraversalByStackTest extends TestCase
{    use Buildable;

    public function test1()
    {
        $rootNode = $this->buildBinaryTree([1, null, 2, 3]);
        $binaryTreePreorderTraversal = new BinaryTreePreorderTraversalByStack();
        $result = $binaryTreePreorderTraversal->preorderTraversal($rootNode);
        self::assertEquals([1, 2, 3], $result);
    }

    public function testEmpty()
    {
        $rootNode = $this->buildBinaryTree([]);
        $binaryTreePreorderTraversal = new BinaryTreePreorderTraversalByStack();
        $result = $binaryTreePreorderTraversal->preorderTraversal($rootNode);
        self::assertEquals([], $result);
    }

    public function testSingle()
    {
        $rootNode = $this->buildBinaryTree([1]);
        $binaryTreePreorderTraversal = new BinaryTreePreorderTraversalByStack();
        $result = $binaryTreePreorderTraversal->preorderTraversal($rootNode);
        self::assertEquals([1], $result);
    }

    public function test2()
    {
        $rootNode = $this->buildBinaryTree([1, 4, 3, 2]);
        $binaryTreePreorderTraversal = new BinaryTreePreorderTraversalByStack();
        $result = $binaryTreePreorderTraversal->preorderTraversal($rootNode);
        self::assertEquals([1, 4, 2, 3], $result);
    }
}
