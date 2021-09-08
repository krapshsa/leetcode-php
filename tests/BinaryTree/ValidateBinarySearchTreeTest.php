<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\ValidateBinarySearchTree;
use PHPUnit\Framework\TestCase;

class ValidateBinarySearchTreeTest extends TestCase
{
    use Buildable;

    public function testTrue()
    {
        $root = $this->buildBinaryTree([2, 1, 3]);
        $validateBinarySearchTree = new ValidateBinarySearchTree();
        $result = $validateBinarySearchTree->isValidBST($root);
        self::assertEquals(true, $result);
    }

    public function testFalse()
    {
        $root = $this->buildBinaryTree([5, 1, 4, null, null, 3, 6]);
        $validateBinarySearchTree = new ValidateBinarySearchTree();
        $result = $validateBinarySearchTree->isValidBST($root);
        self::assertEquals(false, $result);
    }

    public function testFalse2()
    {
        $root = $this->buildBinaryTree([2, 2, 2]);
        $validateBinarySearchTree = new ValidateBinarySearchTree();
        $result = $validateBinarySearchTree->isValidBST($root);
        self::assertEquals(false, $result);
    }
}
