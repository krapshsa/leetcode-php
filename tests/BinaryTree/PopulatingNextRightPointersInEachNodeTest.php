<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\PopulatingNextRightPointersInEachNode;
use PHPUnit\Framework\TestCase;

class PopulatingNextRightPointersInEachNodeTest extends TestCase
{
    use Buildable;
    public function test1()
    {
        $root = $this->buildBinaryTree([1, 2, 3, 4, 5, 6, 7]);
        $populatingNextRightPointersInEachNode = new PopulatingNextRightPointersInEachNode();
        $result = $populatingNextRightPointersInEachNode->connect($root);
        self::assertEquals($result->next, null);
        self::assertEquals($result->left->next, $result->right);
        self::assertEquals($result->right->next, null);
        self::assertEquals($result->left->left->next, $result->left->right);
        self::assertEquals($result->left->right->next, $result->right->left);
        self::assertEquals($result->right->left->next, $result->right->right);
        self::assertEquals($result->right->right->next, null);
    }
}
