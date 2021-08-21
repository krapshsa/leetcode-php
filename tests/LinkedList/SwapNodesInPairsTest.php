<?php

namespace Test\LinkedList;

use App\LinkedList\SwapNodesInPairs;
use PHPUnit\Framework\TestCase;

class SwapNodesInPairsTest extends TestCase
{
    use LinkedListCreatable;

    public function testSwapPairs()
    {
        $linkedList = $this->createLinkedList([1, 2, 3, 4]);
        $expectedLinkedList = $this->createLinkedList([2, 1, 4, 3]);

        $swapNodesInPairs = new SwapNodesInPairs();
        $result = $swapNodesInPairs->swapPairs($linkedList);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testSwapPairsEmpty()
    {
        $linkedList = $this->createLinkedList([]);
        $expectedLinkedList = $this->createLinkedList([]);

        $swapNodesInPairs = new SwapNodesInPairs();
        $result = $swapNodesInPairs->swapPairs($linkedList);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }

    public function testSwapPairsSingle()
    {
        $linkedList = $this->createLinkedList([1]);
        $expectedLinkedList = $this->createLinkedList([1]);

        $swapNodesInPairs = new SwapNodesInPairs();
        $result = $swapNodesInPairs->swapPairs($linkedList);
        self::assertEquals($this->getData($expectedLinkedList), $this->getData($result));
    }
}
