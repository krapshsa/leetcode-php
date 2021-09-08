<?php

namespace Test\BinaryTree\StackAndQueue;

use App\BinaryTree\StackAndQueue\ImplementQueueUsingStacks;
use PHPUnit\Framework\TestCase;

class ImplementQueueUsingStacksTest extends TestCase
{
    public function test2Push1Pop()
    {
        $myQueue = new ImplementQueueUsingStacks();
        // queue is: [1]
        $myQueue->push(1);
        // queue is: [1, 2] (leftmost is front of the queue)
        $myQueue->push(2);
        // return 1
        self::assertEquals(1, $myQueue->peek());
        // return 1, queue is [2]
        self::assertEquals(1, $myQueue->pop());
        // return false
        self::assertEquals(false, $myQueue->empty());
    }

    public function test5Push5Pop()
    {
        $myQueue = new ImplementQueueUsingStacks();
        $myQueue->push(1);
        $myQueue->push(2);
        $myQueue->push(3);
        $myQueue->push(4);
        self::assertEquals(1, $myQueue->pop());
        $myQueue->push(5);
        self::assertEquals(2, $myQueue->pop());
        self::assertEquals(3, $myQueue->pop());
        self::assertEquals(4, $myQueue->pop());
        self::assertEquals(5, $myQueue->pop());
    }

}
