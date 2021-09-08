<?php

namespace App\BinaryTree\LinkedList;

class RemoveLinkedListElements
{
    function removeElements(?ListNode $head, int $val): ?ListNode
    {
        $dummyHead = new ListNode(0, $head);
        $cur = $dummyHead;

        while (null !== $cur->next) {
            if ($cur->next->val === $val) {
                $cur->next = $cur->next->next;
            } else {
                $cur = $cur->next;
            }
        }

        return $dummyHead->next;
    }
}