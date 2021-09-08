<?php

namespace App\BinaryTree\Backtracking;

class CombinationSumII
{
    private $path = [];
    private $result = [];

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    public function combinationSum2(array $candidates, int $target)
    {
        sort($candidates);
        $this->backtracking($candidates, $target, 0);
        return $this->result;
    }

    private function backtracking(&$candidates, &$target, $start)
    {
        // end
        $sum = array_sum($this->path);
        if ($sum === $target) {
            $this->result[] = $this->path;
            return;
        } elseif ($sum > $target) {
            return;
        }
        // for
        for ($i = $start; $i < count($candidates); $i++) {
            if ($i > $start && $candidates[$i] === $candidates[$i - 1]) {
                continue;
            }
            // backtracking
            $this->path[] = $candidates[$i];
            $this->backtracking($candidates, $target, $i + 1);
            array_pop($this->path);
        }
    }
}