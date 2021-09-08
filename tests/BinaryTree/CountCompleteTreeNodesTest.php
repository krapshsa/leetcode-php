<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\CountCompleteTreeNodes;
use PHPUnit\Framework\TestCase;

class CountCompleteTreeNodesTest extends TestCase
{
    use Buildable;
    public function test6()
    {
        $root = $this->buildBinaryTree([1, 2, 3, 4, 5, 6]);
        $countCompleteTreeNodes = new CountCompleteTreeNodes();
        $result = $countCompleteTreeNodes->countNodes($root);
        self::assertEquals(6, $result);
    }


    public function testEmpty()
    {
        $root = $this->buildBinaryTree([]);
        $countCompleteTreeNodes = new CountCompleteTreeNodes();
        $result = $countCompleteTreeNodes->countNodes($root);
        self::assertEquals(0, $result);
    }

    public function testSingle()
    {
        $root = $this->buildBinaryTree([1]);
        $countCompleteTreeNodes = new CountCompleteTreeNodes();
        $result = $countCompleteTreeNodes->countNodes($root);
        self::assertEquals(1, $result);
    }
}
