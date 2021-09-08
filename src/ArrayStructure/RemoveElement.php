<?php


namespace App\BinaryTree\ArrayStructure;


class RemoveElement
{
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        $slowIdx = 0;
        $len = count($nums);
        for ($fastIdx = 0; $fastIdx < $len; $fastIdx++) {
            if ($nums[$fastIdx] !== $val) {
                $nums[$slowIdx] = $nums[$fastIdx];
                $slowIdx++;
            }
        }
        return $slowIdx;
    }
}