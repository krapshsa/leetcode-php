<?php

namespace App\LinkedList;

class RemoveNthNodeFromEndofList
{
    function removeNthFromEnd($head, $n)
    {
        if (null === $head) {
            return null;
        }

        $dummyHead = new ListNode(0, $head);
        $slow = $dummyHead;
        $fast = $dummyHead;
        for ($i = 0; $i < $n; $i++) {
            $fast = $fast->next;
            if (null === $fast) {
                return $head;
            }
        }
        while (null !== $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next;
        }

        $slow->next = $slow->next->next;

        return $dummyHead->next;
    }

}