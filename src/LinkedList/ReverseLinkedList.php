<?php

namespace App\LinkedList;

class ReverseLinkedList
{
    function reverseList(?ListNode $head): ?ListNode
    {
        $left = null;
        $right = $head;

        while (null !== $right) {
            $tempRight = $right->next;
            $right->next = $left;
            $left = $right;
            $right = $tempRight;
        }

        return $left;
    }
}