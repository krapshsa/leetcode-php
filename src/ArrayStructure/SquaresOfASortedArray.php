<?php


namespace App\BinaryTree\ArrayStructure;


class SquaresOfASortedArray
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums)
    {
        $len = count($nums);
        $result = array_fill(0, $len, 0);
        $index = $len - 1;
        $leftIndex = 0;
        $rightIndex = $len - 1;

        while ($index >= 0) {
            $leftNum = abs($nums[$leftIndex]);
            $rightNum = abs($nums[$rightIndex]);
            if ($leftNum > $rightNum) {
                $result[$index] = $leftNum * $leftNum;
                $leftIndex++;
            } else {
                $result[$index] = $rightNum * $rightNum;
                $rightIndex--;
            }
            $index--;
        }

        return $result;
    }
}