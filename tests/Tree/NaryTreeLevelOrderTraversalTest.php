<?php

namespace Test\BinaryTree\Tree;

use App\BinaryTree\Tree\NaryTreeLevelOrderTraversal;
use PHPUnit\Framework\TestCase;

class NaryTreeLevelOrderTraversalTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildTree([1, null, 3, 2, 4, null, 5, 6]);
        $naryTreeLevelOrderTraversal = new NaryTreeLevelOrderTraversal();
        $result = $naryTreeLevelOrderTraversal->levelOrder($root);
        self::assertEquals([[1], [3, 2, 4], [5, 6]], $result);
    }

    public function test2()
    {
        $root = $this->buildTree([1, null, 2, 3, 4, 5, null, null, 6, 7, null, 8, null, 9, 10, null, null, 11, null, 12, null, 13, null, null, 14]);
        $naryTreeLevelOrderTraversal = new NaryTreeLevelOrderTraversal();
        $result = $naryTreeLevelOrderTraversal->levelOrder($root);
        self::assertEquals([[1], [2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13], [14]], $result);
    }
}
