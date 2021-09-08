<?php

namespace App\BinaryTree\Hash;

class TwoSum
{

    public function twoSum(array $nums, int $target)
    {
        $hash = [];
        for ($i = 0; $i < count($nums); $i++) {
            $index = $nums[$i];
            $hash[$index] = $i;
        }
        for ($i = 0; $i < count($nums); $i++) {
            $rest = $target - $nums[$i];
            if (isset($hash[$rest])) {
                $index = $hash[$rest];
                if ($i === $index) {
                    continue;
                }
                return [$i, $index];
            }
        }

        return [];
    }
}