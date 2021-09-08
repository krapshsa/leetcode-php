<?php


namespace App\BinaryTree\ArrayStructure;


class MinimumSizeSubarraySum
{
    /**
     * @param Integer $target
     * @param Integer[] $nums
     * @return Integer
     */
    function minSubArrayLen($target, $nums)
    {
        $subLen = 0;
        $left = 0;
        $sum = 0;
        $len = count($nums);
        for ($right = 0; $right < $len; $right++) {
            $sum += $nums[$right];
            while ($sum >= $target) {
                $newLen = $right - $left + 1;
                $subLen = $subLen > 0 ? min($subLen, $newLen) : $newLen;
                $sum -= $nums[$left];
                $left++;
            }
        }
        return $subLen;
    }
}