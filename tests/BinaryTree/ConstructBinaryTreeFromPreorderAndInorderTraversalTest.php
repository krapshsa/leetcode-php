<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\ConstructBinaryTreeFromPreorderAndInorderTraversal;
use PHPUnit\Framework\TestCase;

class ConstructBinaryTreeFromPreorderAndInorderTraversalTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $constructBinaryTreeFromPreorderAndInorderTraversal = new ConstructBinaryTreeFromPreorderAndInorderTraversal();
        $result = $constructBinaryTreeFromPreorderAndInorderTraversal->buildTree([3, 9, 20, 15, 7], [9, 3, 15, 20, 7]);
        self::assertEquals([3, 9, 20, null, null, 15, 7], $this->getLevelOrderValues($result));
    }

    public function testSinge()
    {
        $constructBinaryTreeFromPreorderAndInorderTraversal = new ConstructBinaryTreeFromPreorderAndInorderTraversal();
        $result = $constructBinaryTreeFromPreorderAndInorderTraversal->buildTree([-1], [-1]);
        self::assertEquals([-1], $this->getLevelOrderValues($result));
    }
}
