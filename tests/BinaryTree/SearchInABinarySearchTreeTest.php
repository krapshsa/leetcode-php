<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\SearchInABinarySearchTree;
use PHPUnit\Framework\TestCase;

class SearchInABinarySearchTreeTest extends TestCase
{
    use Buildable;

    public function test2()
    {
        $root = $this->buildBinaryTree([4, 2, 7, 1, 3]);
        $searchInABinarySearchTree = new SearchInABinarySearchTree();
        $result = $searchInABinarySearchTree->searchBST($root, 2);
        self::assertEquals([2, 1, 3], $this->getLevelOrderValues($result));
    }

    public function test5()
    {
        $root = $this->buildBinaryTree([4, 2, 7, 1, 3]);
        $searchInABinarySearchTree = new SearchInABinarySearchTree();
        $result = $searchInABinarySearchTree->searchBST($root, 5);
        self::assertEquals([], $this->getLevelOrderValues($result));
    }
}
