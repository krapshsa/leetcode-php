<?php

namespace Test\BinaryTree\ArrayStructure;

use App\BinaryTree\ArrayStructure\RemoveElement;
use PHPUnit\Framework\TestCase;

class RemoveElementTest extends TestCase
{

    public function testRemoveElement()
    {
        $nums = [3, 2, 2, 3];
        $removeElement = new RemoveElement();
        $result = $removeElement->removeElement($nums, 3);
        self::assertEquals(2, $result);
        self::assertEquals([2, 2], array_slice($nums, 0, 2));
    }
}
