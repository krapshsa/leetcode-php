<?php

namespace Test\BinaryTree\LinkedList;

use App\BinaryTree\LinkedList\ListNode;
use App\BinaryTree\LinkedList\RemoveLinkedListElements;
use PHPUnit\Framework\TestCase;

class RemoveLinkedListElementsTest extends TestCase
{
    use LinkedListCreatable;
    public function testNonNormal()
    {
        $linkedList = $this->createLinkedList([1, 2, 6, 3, 4, 5, 6]);
        $expectedLinkedList = $this->createLinkedList([1, 2, 3, 4, 5]);

        $removeLinkedListElements = new RemoveLinkedListElements();
        $result = $removeLinkedListElements->removeElements($linkedList, 6);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testEmpty()
    {
        $linkedList = $this->createLinkedList([]);
        $expectedLinkedList = $this->createLinkedList([]);

        $removeLinkedListElements = new RemoveLinkedListElements();
        $result = $removeLinkedListElements->removeElements($linkedList, 1);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testRemoveAll()
    {
        $linkedList = $this->createLinkedList([7, 7, 7, 7]);
        $expectedLinkedList = $this->createLinkedList([]);

        $removeLinkedListElements = new RemoveLinkedListElements();
        $result = $removeLinkedListElements->removeElements($linkedList, 7);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }
}
