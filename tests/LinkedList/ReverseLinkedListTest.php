<?php

namespace Test\BinaryTree\LinkedList;

use App\BinaryTree\LinkedList\ReverseLinkedList;
use PHPUnit\Framework\TestCase;

class ReverseLinkedListTest extends TestCase
{
    use LinkedListCreatable;

    public function testReverseList()
    {
        $linkedList = $this->createLinkedList([1, 2, 3, 4, 5]);
        $expectedLinkedList = $this->createLinkedList([5, 4, 3, 2, 1]);

        $removeLinkedListElements = new ReverseLinkedList();
        $result = $removeLinkedListElements->reverseList($linkedList);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testReverseList2()
    {
        $linkedList = $this->createLinkedList([1, 2]);
        $expectedLinkedList = $this->createLinkedList([2, 1]);

        $removeLinkedListElements = new ReverseLinkedList();
        $result = $removeLinkedListElements->reverseList($linkedList);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testReverseListSingle()
    {
        $linkedList = $this->createLinkedList([2]);
        $expectedLinkedList = $this->createLinkedList([2]);

        $removeLinkedListElements = new ReverseLinkedList();
        $result = $removeLinkedListElements->reverseList($linkedList);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testReverseListEmpty()
    {
        $linkedList = $this->createLinkedList([]);
        $expectedLinkedList = $this->createLinkedList([]);

        $removeLinkedListElements = new ReverseLinkedList();
        $result = $removeLinkedListElements->reverseList($linkedList);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }
}
