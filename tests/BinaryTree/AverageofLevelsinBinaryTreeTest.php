<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\Tree\AverageofLevelsinBinaryTree;
use PHPUnit\Framework\TestCase;

class AverageofLevelsinBinaryTreeTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([3, 9, 20, null, 15, 7]);
        $averageofLevelsinBinaryTree = new AverageofLevelsinBinaryTree();
        $result = $averageofLevelsinBinaryTree->averageOfLevels($root);
        self::assertEquals([3.00000, 14.500000, 11.00000], $result);
    }
}
