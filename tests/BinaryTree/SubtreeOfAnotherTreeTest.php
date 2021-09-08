<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\SubtreeOfAnotherTree;
use PHPUnit\Framework\TestCase;

class SubtreeOfAnotherTreeTest extends TestCase
{
    use Buildable;
    public function testTrue()
    {
        $root = $this->buildBinaryTree([3, 4, 5, 1, 2]);
        $subRoot = $this->buildBinaryTree([4, 1, 2]);
        $subtreeOfAnotherTree = new SubtreeOfAnotherTree();
        $result = $subtreeOfAnotherTree->isSubtree($root, $subRoot);
        self::assertEquals(true, $result);
    }

    public function testTrue2()
    {
        $root = $this->buildBinaryTree([1, null, 1, 2]);
        $subRoot = $this->buildBinaryTree([1, 2]);
        $subtreeOfAnotherTree = new SubtreeOfAnotherTree();
        $result = $subtreeOfAnotherTree->isSubtree($root, $subRoot);
        self::assertEquals(true, $result);
    }

    public function testFalse()
    {
        $root = $this->buildBinaryTree([3,4,5,1,2,null,null,null,null,0]);
        $subRoot = $this->buildBinaryTree([4, 1, 2]);
        $subtreeOfAnotherTree = new SubtreeOfAnotherTree();
        $result = $subtreeOfAnotherTree->isSubtree($root, $subRoot);
        self::assertEquals(false, $result);
    }
}
