<?php

namespace Test\BinaryTree\LinkedList;

use App\BinaryTree\LinkedList\LinkedListCycleII;
use PHPUnit\Framework\TestCase;

class LinkedListCycleIITest extends TestCase
{
    use LinkedListCreatable;

    public function testNormal()
    {
        list($list, $cycle) = $this->createCycle([3, 2, 0, 4], 1);
        $linkedListCycleII = new LinkedListCycleII();
        $result = $linkedListCycleII->detectCycle($list);
        self::assertEquals($cycle, $result);
    }

    public function testNormalHeadCycle()
    {
        list($list, $cycle) = $this->createCycle([1, 2], 0);
        $linkedListCycleII = new LinkedListCycleII();
        $result = $linkedListCycleII->detectCycle($list);
        self::assertEquals($cycle, $result);
    }

    public function testNormalNoCycle()
    {
        list($list, $cycle) = $this->createCycle([0], -1);
        $linkedListCycleII = new LinkedListCycleII();
        $result = $linkedListCycleII->detectCycle($list);
        self::assertEquals(null, $result);
    }

    public function testNormalSingleNode()
    {
        list($list, $cycle) = $this->createCycle([0], 0);
        $linkedListCycleII = new LinkedListCycleII();
        $result = $linkedListCycleII->detectCycle($list);
        self::assertEquals($cycle, $result);
    }

    /**
     * @param array $values
     * @param $pos
     */
    private function createCycle(array $values, $pos)
    {
        $len = count($values);
        $list = $this->createLinkedList($values);

        $c = null;
        $p = $list;
        for ($i = 0; $i < $len; $i++) {
            if ($i === $pos) {
                $c = $p;
            }
            $p = $p->next;
        }

        $p = $list;
        for ($i = 0; $i < $len - 1; $i++) {
            $p = $p->next;
        }
        $p->next = $c;

        return [$list, $c];
    }
}
