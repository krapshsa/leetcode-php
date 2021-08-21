<?php

namespace App\LinkedList;

class LinkedListCycleII
{

    public function detectCycle(?ListNode $head)
    {
        if (null === $head) {
            return null;
        }
        if ($head === $head->next) {
            return $head;
        }

        $rabbit = $head;
        $turtle = $head;
        while (null != $rabbit->next && null !== $rabbit->next->next) {
            $turtle = $turtle->next;
            $rabbit = $rabbit->next->next;
            // meet
            if ($rabbit === $turtle) {
                $turtle = $head;
                while ($rabbit !== $turtle) {
                    $turtle = $turtle->next;
                    $rabbit = $rabbit->next;
                }
                return $turtle;
            }
        }

        return null;
    }
}