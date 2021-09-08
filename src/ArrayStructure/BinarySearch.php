<?php


namespace App\BinaryTree\ArrayStructure;


class BinarySearch
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search(array $nums, int $target)
    {
        $left = 0;
        $right = count($nums);
        while ($left <= $right) {
            $index = (int)(($left + $right) / 2);
            if ($nums[$index] === $target) {
                return $index;
            } elseif ($nums[$index] > $target) {
                $right = $index - 1;
            } else {
                $left = $index + 1;
            }
        }
        return -1;
    }
}