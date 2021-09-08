<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\FindBottomLeftTreeValue;
use PHPUnit\Framework\TestCase;

class FindBottomLeftTreeValueTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([2, 1, 3]);
        $findBottomLeftTreeValue = new FindBottomLeftTreeValue();
        $result = $findBottomLeftTreeValue->findBottomLeftValue($root);
        self::assertEquals(1, $result);
    }

    public function test7()
    {
        $root = $this->buildBinaryTree([1, 2, 3, 4, null, 5, 6, null, null, 7]);
        $findBottomLeftTreeValue = new FindBottomLeftTreeValue();
        $result = $findBottomLeftTreeValue->findBottomLeftValue($root);
        self::assertEquals(7, $result);
    }
}
