<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\BinaryTreePaths;
use PHPUnit\Framework\TestCase;

class BinaryTreePathsTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([1, 2, 3, null, 5]);
        $binaryTreePaths = new BinaryTreePaths();
        $result = $binaryTreePaths->binaryTreePaths($root);
        self::assertEquals([], array_diff(["1->2->5", "1->3"], $result));
    }
}
