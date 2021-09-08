<?php

namespace Test\BinaryTree\ArrayStructure;

use App\BinaryTree\ArrayStructure\BinarySearch;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public function testExists()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search([-1, 0, 3, 5, 9, 12], 9);
        self::assertEquals(4, $result);
    }

    public function testExistsTwoElements()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search([2, 5], 2);
        self::assertEquals(0, $result);
    }

    public function testExistsThreeElements()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search([-1, 0, 5], -1);
        self::assertEquals(0, $result);
    }

    public function testNonExists()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->search([-1, 0, 3, 5, 9, 12], 2);
        self::assertEquals(-1, $result);
    }
}
