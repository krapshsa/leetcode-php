<?php

namespace Test\BinaryTree\StackAndQueue;

use App\BinaryTree\StackAndQueue\RemoveAllAdjacentDuplicatesInString;
use PHPUnit\Framework\TestCase;

class RemoveAllAdjacentDuplicatesInStringTest extends TestCase
{
    public function test_abbaca()
    {
        $removeAllAdjacentDuplicatesInString = new RemoveAllAdjacentDuplicatesInString();
        $result = $removeAllAdjacentDuplicatesInString->removeDuplicates('abbaca');
        self::assertEquals('ca', $result);
    }

    public function test_azxxzy()
    {
        $removeAllAdjacentDuplicatesInString = new RemoveAllAdjacentDuplicatesInString();
        $result = $removeAllAdjacentDuplicatesInString->removeDuplicates('azxxzy');
        self::assertEquals('ay', $result);
    }
}
