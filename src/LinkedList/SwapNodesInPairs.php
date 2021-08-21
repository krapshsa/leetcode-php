<?php

namespace App\LinkedList;

class SwapNodesInPairs
{
    function swapPairs($head)
    {
        if (null === $head) {
            return null;
        }

        $dummyHead = new ListNode(0, $head);
        $cur = $dummyHead;
        while (null !== $cur->next && null !== $cur->next->next) {
            $x = $cur->next;
            $y = $cur->next->next;
            $z = $cur->next->next->next;

            $cur->next = $y;
            $cur->next->next = $x;
            $cur->next->next->next = $z;

            $cur = $cur->next->next;
        }

        return $dummyHead->next;
    }
}