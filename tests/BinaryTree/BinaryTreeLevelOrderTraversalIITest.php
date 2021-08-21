<?php

namespace Test\BinaryTree;

use App\BinaryTree\BinaryTreeLevelOrderTraversalII;
use PHPUnit\Framework\TestCase;

class BinaryTreeLevelOrderTraversalIITest extends TestCase
{
    use Buildable;

    public function testNormal()
    {
        $root = $this->buildBinaryTree([3, 9, 20, null, null, 15, 7]);
        $binaryTreeLevelOrderTraversalII = new BinaryTreeLevelOrderTraversalII();
        $result = $binaryTreeLevelOrderTraversalII->levelOrderBottom($root);
        self::assertEquals([[15, 7], [9, 20], [3]], $result);
    }

    public function testEmpty()
    {
        $root = $this->buildBinaryTree([]);
        $binaryTreeLevelOrderTraversalII = new BinaryTreeLevelOrderTraversalII();
        $result = $binaryTreeLevelOrderTraversalII->levelOrderBottom($root);
        self::assertEquals([], $result);
    }

    public function testSingle()
    {
        $root = $this->buildBinaryTree([1]);
        $binaryTreeLevelOrderTraversalII = new BinaryTreeLevelOrderTraversalII();
        $result = $binaryTreeLevelOrderTraversalII->levelOrderBottom($root);
        self::assertEquals([[1]], $result);
    }
}
