<?php

namespace App\BinaryTree\LinkedList;

class DesignLinkedList
{
    private ?ListNode $head = null;
    private ?ListNode $dummyHead;

    public function __construct()
    {
        $this->dummyHead = new ListNode(0, null);
    }


    public function get(int $index): int
    {
        $cur = $this->dummyHead;
        $curIndex = -1;
        while (null !== $cur->next) {
            $curIndex++;
            $cur = $cur->next;
            if ($index === $curIndex) {
                break;
            }
        }

        if (-1 !== $curIndex) {
            return $cur->val;
        } else {
            return -1;
        }
    }

    public function addAtHead(int $val)
    {
        $this->head = new ListNode($val, $this->head);
        $this->dummyHead->next = $this->head;
    }

    public function addAtTail(int $val)
    {
        $cur = $this->dummyHead;
        while (null !== $cur->next) {
            $cur = $cur->next;
        }
        $cur->next = new ListNode($val, null);
    }

    public function addAtIndex(int $index, int $val)
    {
        $cur = $this->dummyHead;
        $curIndex = -1;
        while (null !== $cur->next) {
            if ($curIndex + 1 === $index) {
                break;
            } else {
                $cur = $cur->next;
                $curIndex++;
            }
        }
        $cur->next = new ListNode($val, $cur->next);
        if (-1 === $curIndex) {
            $this->head = $cur->next;
            $this->dummyHead->next = $this->head;
        }
    }

    public function deleteAtIndex(int $index)
    {
        $cur = $this->dummyHead;
        $curIndex = -1;
        while (null !== $cur->next) {
            if ($curIndex + 1 === $index) {
                break;
            } else {
                $cur = $cur->next;
                $curIndex++;
            }
        }
        $cur->next = $cur->next->next;
        if (-1 === $curIndex) {
            $this->head = $cur->next;
            $this->dummyHead->next = $this->head;
        }
    }
}