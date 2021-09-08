<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\PathSumII;
use PHPUnit\Framework\TestCase;

class PathSumIITest extends TestCase
{
    use Buildable;

    public function test22()
    {
        $root = $this->buildBinaryTree([5, 4, 8, 11, null, 13, 4, 7, 2, null, null, 5, 1]);
        $pathSumII = new PathSumII();
        $result = $pathSumII->pathSum($root, 22);
        self::assertEquals([[5, 4, 11, 2], [5, 8, 4, 5]], $result);
    }

    public function test5()
    {
        $root = $this->buildBinaryTree([1, 2, 3]);
        $pathSumII = new PathSumII();
        $result = $pathSumII->pathSum($root, 5);
        self::assertEquals([], $result);
    }

    public function test0()
    {
        $root = $this->buildBinaryTree([1, 2]);
        $pathSumII = new PathSumII();
        $result = $pathSumII->pathSum($root, 0);
        self::assertEquals([], $result);
    }
}
