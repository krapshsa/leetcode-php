<?php

namespace Test\BinaryTree\BinaryTree;

use App\BinaryTree\FindLargestValueInEachTreeRow;
use PHPUnit\Framework\TestCase;

class FindLargestValueInEachTreeRowTest extends TestCase
{
    use Buildable;

    public function test1()
    {
        $root = $this->buildBinaryTree([1, 3, 2, 5, 3, null, 9]);
        $findLargestValueInEachTreeRow = new FindLargestValueInEachTreeRow();
        $result = $findLargestValueInEachTreeRow->largestValues($root);
        self::assertEquals([1, 3, 9], $result);
    }

    public function test2()
    {
        $root = $this->buildBinaryTree([1, 2, 3]);
        $findLargestValueInEachTreeRow = new FindLargestValueInEachTreeRow();
        $result = $findLargestValueInEachTreeRow->largestValues($root);
        self::assertEquals([1, 3], $result);
    }

    public function testSingle()
    {
        $root = $this->buildBinaryTree([1]);
        $findLargestValueInEachTreeRow = new FindLargestValueInEachTreeRow();
        $result = $findLargestValueInEachTreeRow->largestValues($root);
        self::assertEquals([1], $result);
    }
}
