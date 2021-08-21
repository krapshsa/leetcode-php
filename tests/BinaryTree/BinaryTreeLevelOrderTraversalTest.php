<?php

namespace Test\BinaryTree;

use App\BinaryTree\BinaryTreeLevelOrderTraversal;
use PHPUnit\Framework\TestCase;

class BinaryTreeLevelOrderTraversalTest extends TestCase
{
    use Buildable;

    public function testName()
    {
        $rootNode = $this->buildBinaryTree([3, 9, 20, null, null, 15, 7]);
        $binaryTreeLevelOrderTraversal = new BinaryTreeLevelOrderTraversal();
        $result = $binaryTreeLevelOrderTraversal->levelOrder($rootNode);
        self::assertEquals([[3], [9, 20], [15, 7]], $result);
    }

    public function testEmpty()
    {
        $rootNode = $this->buildBinaryTree([]);
        $binaryTreeLevelOrderTraversal = new BinaryTreeLevelOrderTraversal();
        $result = $binaryTreeLevelOrderTraversal->levelOrder($rootNode);
        self::assertEquals([], $result);
    }

    public function testSingle()
    {
        $rootNode = $this->buildBinaryTree([1]);
        $binaryTreeLevelOrderTraversal = new BinaryTreeLevelOrderTraversal();
        $result = $binaryTreeLevelOrderTraversal->levelOrder($rootNode);
        self::assertEquals([[1]], $result);
    }
}
