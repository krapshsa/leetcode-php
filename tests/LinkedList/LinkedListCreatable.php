<?php

namespace Test\LinkedList;

use App\LinkedList\ListNode;

trait LinkedListCreatable
{
    public function createLinkedList(array $values): ?ListNode
    {
        $linkedList = null;
        $current = null;
        foreach ($values as $value) {
            if ($current === null) {
                $linkedList = new ListNode($value);
                $current = $linkedList;
            } else {
                $current->next = new ListNode($value);
                $current = $current->next;
            }
        }
        return $linkedList;
    }

    public function getData(?ListNode $node): array
    {
        $result = [];
        $cur = $node;
        while ($cur !== null) {
            $result[] = $cur->val;
            $cur = $cur->next;
        }
        return $result;
    }
}