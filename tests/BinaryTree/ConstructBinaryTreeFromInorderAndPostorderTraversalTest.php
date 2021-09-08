<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\ConstructBinaryTreeFromInorderAndPostorderTraversal;
use PHPUnit\Framework\TestCase;

class ConstructBinaryTreeFromInorderAndPostorderTraversalTest extends TestCase
{
    use Buildable;
    public function testNormal()
    {
        $constructBinaryTreeFromInorderAndPostorderTraversal = new ConstructBinaryTreeFromInorderAndPostorderTraversal();
        $result = $constructBinaryTreeFromInorderAndPostorderTraversal->buildTree([9, 3, 15, 20, 7], [9, 15, 7, 20, 3]);
        self::assertEquals([3, 9, 20, null, null, 15, 7], $this->getLevelOrderValues($result));
    }

    public function testSingle()
    {
        $constructBinaryTreeFromInorderAndPostorderTraversal = new ConstructBinaryTreeFromInorderAndPostorderTraversal();
        $result = $constructBinaryTreeFromInorderAndPostorderTraversal->buildTree([-1], [-1]);
        self::assertEquals([-1], $this->getLevelOrderValues($result));
    }
}
