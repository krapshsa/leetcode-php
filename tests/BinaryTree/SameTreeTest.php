<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\SameTree;
use PHPUnit\Framework\TestCase;

class SameTreeTest extends TestCase
{
    use Buildable;
    public function test1()
    {
        $p = $this->buildBinaryTree([1, 2, 3]);
        $q = $this->buildBinaryTree([1, 2, 3]);
        $same = new SameTree();
        $result = $same->isSameTree($p, $q);
        self::assertEquals(true, $result);
    }

    public function test2()
    {
        $p = $this->buildBinaryTree([1, 2]);
        $q = $this->buildBinaryTree([1, null, 3]);
        $same = new SameTree();
        $result = $same->isSameTree($p, $q);
        self::assertEquals(false, $result);
    }

    public function test3()
    {
        $p = $this->buildBinaryTree([1, 2, 1]);
        $q = $this->buildBinaryTree([1, 1, 2]);
        $same = new SameTree();
        $result = $same->isSameTree($p, $q);
        self::assertEquals(false, $result);
    }
}
