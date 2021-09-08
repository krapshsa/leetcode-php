<?php

namespace App\BinaryTree\Backtracking;

class CombinationSumIII
{
    public function combinationSum3(int $k, int $n): array
    {
        $path = [];
        $result = [];
        $this->backtracking($k, $n, 1, $path, $result);
        return $result;
    }

    private function backtracking(int $k, int $n, int $start, array &$path, array &$result)
    {
        // end
        $pathLength = count($path);
        if ($k === $pathLength) {
            if (array_sum($path) === $n) {
                $result[] = $path;
            }
            return;
        }
        if (array_sum($path) >= $n) {
            return;
        }

        // How many numbers do I need (include $i itself) ?
        // $k - $pathLength = numbers I need
        // [ .... $i ... 9 ]
        //         |_____|
        //         less than or equal to ($k - $pathLength) - 1 (include $i)
        // Trim impossible loop
        for ($i = $start; $i + $k - $pathLength - 1 <= 9; $i++) {
            $path[] = $i;
            $this->backtracking($k, $n, $i + 1, $path, $result);
            array_pop($path);
        }
    }
}