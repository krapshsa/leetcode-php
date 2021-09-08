<?php

namespace App\BinaryTree\Backtracking;

class CombinationSum
{
    public function combinationSum(array $candidates, int $target): array
    {
        $result = [];
        $path = [];
        $this->backtracking($candidates, $target, 0, $path, $result);
        return $result;
    }

    private function backtracking(array $candidates, int $target, int $start, array &$path, array &$result)
    {
        // end
        $sum = array_sum($path);
        if ($sum === $target) {
            $result[] = $path;
            return;
        } elseif ($sum > $target) {
            return;
        }

        // loop
        for ($i = $start; $i < count($candidates); $i++) {
            // backtracking
            $path[] = $candidates[$i];
            $this->backtracking($candidates, $target, $i, $path, $result);
            array_pop($path);
        }
    }
}