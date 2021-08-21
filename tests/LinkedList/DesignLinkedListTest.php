<?php

namespace Test\LinkedList;

use App\LinkedList\DesignLinkedList;
use PHPUnit\Framework\TestCase;

class DesignLinkedListTest extends TestCase
{
    public function test()
    {
        $designLinkedList = new DesignLinkedList();
        $designLinkedList->addAtHead(1);
        $designLinkedList->addAtTail(3);
        $designLinkedList->addAtIndex(1, 2);

        $result = $designLinkedList->get(1);
        self::assertEquals(2, $result);

        $designLinkedList->deleteAtIndex(1);

        $result = $designLinkedList->get(1);
        self::assertEquals(3, $result);
    }

    public function test2()
    {
        $designLinkedList = new DesignLinkedList();
        $designLinkedList->addAtHead(1);
        $designLinkedList->addAtTail(3);
        $designLinkedList->addAtIndex(1, 2);

        $result = $designLinkedList->get(1);
        self::assertEquals(2, $result);

        $designLinkedList->deleteAtIndex(0);

        $result = $designLinkedList->get(0);
        self::assertEquals(2, $result);
    }
}
