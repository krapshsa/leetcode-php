<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\SymmetricTree;
use PHPUnit\Framework\TestCase;

class SymmetricTreeTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([1, 2, 2, 3, 4, 4, 3]);
        $symmetricTree = new SymmetricTree();
        $result = $symmetricTree->isSymmetric($root);
        self::assertEquals(true, $result);
    }

    public function test2()
    {
        $root = $this->buildBinaryTree([1, 2, 2, null, 3, null, 3]);
        $symmetricTree = new SymmetricTree();
        $result = $symmetricTree->isSymmetric($root);
        self::assertEquals(false, $result);
    }

    public function test3()
    {
        $root = $this->buildBinaryTree([2, 3, 3, 4, 5, null, 4]);
        $symmetricTree = new SymmetricTree();
        $result = $symmetricTree->isSymmetric($root);
        self::assertEquals(false, $result);
    }
}
