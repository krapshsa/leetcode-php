<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\PathSum;
use PHPUnit\Framework\TestCase;

class PathSumTest extends TestCase
{
    use Buildable;

    public function testTrue()
    {
        $root = $this->buildBinaryTree([5, 4, 8, 11, null, 13, 4, 7, 2, null, null, null, 1]);
        $pathSum = new PathSum();
        $result = $pathSum->hasPathSum($root, 22);
        self::assertEquals(true, $result);
    }

    public function testFalse()
    {
        $root = $this->buildBinaryTree([1, 2, 3]);
        $pathSum = new PathSum();
        $result = $pathSum->hasPathSum($root, 5);
        self::assertEquals(false, $result);
    }

    public function testFalse2()
    {
        $root = $this->buildBinaryTree([1, 2]);
        $pathSum = new PathSum();
        $result = $pathSum->hasPathSum($root, 0);
        self::assertEquals(false, $result);
    }
}
