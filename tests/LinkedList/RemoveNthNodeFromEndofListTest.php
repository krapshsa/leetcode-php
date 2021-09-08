<?php

namespace Test\BinaryTree\LinkedList;

use App\BinaryTree\LinkedList\RemoveNthNodeFromEndofList;
use PHPUnit\Framework\TestCase;

class RemoveNthNodeFromEndofListTest extends TestCase
{
    use LinkedListCreatable;

    public function testRemoveNthFromEnd()
    {
        $linkedList = $this->createLinkedList([1, 2, 3, 4, 5]);
        $expectedLinkedList = $this->createLinkedList([1, 2, 3, 5]);

        $removeNthNodeFromEndofList = new RemoveNthNodeFromEndofList();
        $result = $removeNthNodeFromEndofList->removeNthFromEnd($linkedList, 2);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testRemoveNthFromEndWithSingleNode()
    {
        $linkedList = $this->createLinkedList([1]);
        $expectedLinkedList = $this->createLinkedList([]);

        $removeNthNodeFromEndofList = new RemoveNthNodeFromEndofList();
        $result = $removeNthNodeFromEndofList->removeNthFromEnd($linkedList, 1);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testRemoveNthFromEndWithTwoNode()
    {
        $linkedList = $this->createLinkedList([1, 2]);
        $expectedLinkedList = $this->createLinkedList([1]);

        $removeNthNodeFromEndofList = new RemoveNthNodeFromEndofList();
        $result = $removeNthNodeFromEndofList->removeNthFromEnd($linkedList, 1);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testRemoveNthFromEndWithInvalidN()
    {
        $linkedList = $this->createLinkedList([1, 2, 3, 4, 5]);
        $expectedLinkedList = $this->createLinkedList([1, 2, 3, 4, 5]);

        $removeNthNodeFromEndofList = new RemoveNthNodeFromEndofList();
        $result = $removeNthNodeFromEndofList->removeNthFromEnd($linkedList, 6);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }
}
