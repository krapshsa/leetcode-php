<?php

namespace App\LinkedList;

class IntersectionofTwoLinkedLists
{
    public function getIntersectionNode(?ListNode $headA, ?ListNode $headB)
    {
        $lenA = 0;
        $lenB = 0;
        $pA = $headA;
        $pB = $headB;

        if (null === $pA || null === $pB) {
            return null;
        }

        while (null !== $pA) {
            $pA = $pA->next;
            $lenA++;
        }
        while (null !== $pB) {
            $pB = $pB->next;
            $lenB++;
        }

        $pA = $headA;
        $pB = $headB;
        $diff = abs($lenA - $lenB);
        if ($lenA > $lenB) {
            for ($i = 0; $i < $diff; $i++) {
                $pA = $pA->next;
            }
        } elseif ($lenB > $lenA) {
            for ($i = 0; $i < $diff; $i++) {
                $pB = $pB->next;
            }
        }
        while (null !== $pA) {
            if ($pA === $pB) {
                return $pA;
            }
            $pA = $pA->next;
            $pB = $pB->next;
        }

        return null;
    }
}