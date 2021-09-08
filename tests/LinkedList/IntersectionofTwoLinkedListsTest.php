<?php

namespace Test\BinaryTree\LinkedList;

use App\BinaryTree\LinkedList\IntersectionofTwoLinkedLists;
use PHPUnit\Framework\TestCase;

class IntersectionofTwoLinkedListsTest extends TestCase
{
    use LinkedListCreatable;

    public function testNormal()
    {
        list ($l1, $l2, $l3) = $this->createIntersection([4, 1], [5, 6, 1], [8, 4, 5]);
        $intersectionofTwoLinkedLists = new IntersectionofTwoLinkedLists();
        $result = $intersectionofTwoLinkedLists->getIntersectionNode($l1, $l2);
        self::assertEquals($l3, $result);
    }

    public function testNormal2()
    {
        list ($l1, $l2, $l3) = $this->createIntersection([1, 9, 1], [3], [2, 4]);
        $intersectionofTwoLinkedLists = new IntersectionofTwoLinkedLists();
        $result = $intersectionofTwoLinkedLists->getIntersectionNode($l1, $l2);
        self::assertEquals($l3, $result);
    }

    public function testNormalNoIntersection()
    {
        list ($l1, $l2, $l3) = $this->createIntersection([2, 6, 4], [1, 5], []);
        $intersectionofTwoLinkedLists = new IntersectionofTwoLinkedLists();
        $result = $intersectionofTwoLinkedLists->getIntersectionNode($l1, $l2);
        self::assertEquals($l3, $result);
    }

    private function createIntersection($v1, $v2, $v3)
    {
        $l1 = $this->createLinkedList($v1);
        $l2 = $this->createLinkedList($v2);
        $l3 = $this->createLinkedList($v3);
        $p = $l1;
        while (null != $p->next) {
            $p = $p->next;
        }
        $p->next = $l3;
        $p = $l2;
        while (null != $p->next) {
            $p = $p->next;
        }
        $p->next = $l3;

        return [$l1, $l2, $l3];
    }
}
