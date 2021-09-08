<?php

namespace Test\BinaryTree\StackAndQueue;

use App\BinaryTree\StackAndQueue\ImplementStackUsingQueues;
use PHPUnit\Framework\TestCase;

class ImplementStackUsingQueuesTest extends TestCase
{
    public function test2Push2Pop()
    {
        $implementStackUsingQueues = new ImplementStackUsingQueues();
        $implementStackUsingQueues->push(1);
        $implementStackUsingQueues->push(2);
        self::assertEquals(2, $implementStackUsingQueues->top());
        self::assertEquals(2, $implementStackUsingQueues->pop());
        self::assertEquals(false, $implementStackUsingQueues->empty());
    }
}
