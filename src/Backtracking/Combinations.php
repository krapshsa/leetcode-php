<?php

namespace App\BinaryTree\Backtracking;

class Combinations
{
    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    public function combine(int $n, int $k): array
    {
        $path = [];
        $result = [];
        $this->backtracking(1, $n, $k, $path, $result);
        return $result;
    }

    private function backtracking(int $start, int $end, int $k, array &$path, array &$result)
    {
        $pathLength = count($path);
        if ($pathLength === $k) {
            $result[] = $path;
        } else {
            // need ($k - pathLength) elements
            // include $i
            // $i + ($k - $pathLength) - 1 <= $end
            for ($i = $start; $i <= $end - ($k - $pathLength) + 1; $i++) {
                $path[] = $i;
                $this->backtracking($i + 1, $end, $k, $path, $result);
                array_pop($path);
            }
        }
    }
}