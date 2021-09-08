<?php

namespace Test\BinaryTree\Hash;

use App\BinaryTree\Hash\IntersectionofTwoArrays;
use PHPUnit\Framework\TestCase;

class IntersectionofTwoArraysTest extends TestCase
{
    public function testOneIntersection()
    {
        $intersectionofTwoArrays = new IntersectionofTwoArrays();
        $result = $intersectionofTwoArrays->intersection([1, 2, 2, 1], [2, 2]);
        self::assertEquals([2], $result);
    }

    public function testTwoIntersection()
    {
        $intersectionofTwoArrays = new IntersectionofTwoArrays();
        $result = $intersectionofTwoArrays->intersection([4, 9, 5], [9, 4, 9, 8, 4]);
        sort($result);
        self::assertEquals([4, 9], $result);
    }
}
