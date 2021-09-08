<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\Tree\BinaryTreeRightSideView;
use PHPUnit\Framework\TestCase;

class BinaryTreeRightSideViewTest extends TestCase
{
    use Buildable;

    public function testNormal()
    {
        $root = $this->buildBinaryTree([1, 2, 3, null, 5, null, 4]);
        $binaryTreeRightSideView = new BinaryTreeRightSideView();
        $result = $binaryTreeRightSideView->rightSideView($root);
        self::assertEquals([1, 3, 4], $result);
    }
}
