<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\MergeTwoBinaryTrees;
use PHPUnit\Framework\TestCase;

class MergeTwoBinaryTreesTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root1 = $this->buildBinaryTree([1, 3, 2, 5]);
        $root2 = $this->buildBinaryTree([2, 1, 3, null, 4, null, 7]);
        $mergeTwoBinaryTrees = new MergeTwoBinaryTrees();
        $result = $mergeTwoBinaryTrees->mergeTrees($root1, $root2);
        self::assertEquals([3,4,5,5,4,null,7], $this->getLevelOrderValues($result));
    }

    public function test2()
    {
        $root1 = $this->buildBinaryTree([1]);
        $root2 = $this->buildBinaryTree([1, 2]);
        $mergeTwoBinaryTrees = new MergeTwoBinaryTrees();
        $result = $mergeTwoBinaryTrees->mergeTrees($root1, $root2);
        self::assertEquals([2, 2], $this->getLevelOrderValues($result));
    }
}
