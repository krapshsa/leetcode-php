<?php

namespace App\BinaryTree\Hash;

class FourSum
{

    public function fourSum(array $nums, int $target)
    {
        $len = count($nums);
        if ($len < 4) {
            return [];
        }
        sort($nums);
        $ans = [];
        for ($i = 0; $i < $len - 3; $i++) {
            if ($target >= 0 && $nums[$i] > $target) {
                break;
            }
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }

            for ($j = $i + 1; $j < $len - 2; $j++) {
                if ($target >= 0 && $nums[$i] + $nums[$j] > $target) {
                    break;
                }
                if ($j > $i + 1 && $nums[$j] === $nums[$j - 1]) {
                    continue;
                }

                $k = $j + 1;
                $l = $len - 1;
                while ($k < $l) {
                    $sum = $nums[$i] + $nums[$j] + $nums[$k] + $nums[$l];
                    if ($sum < $target) {
                        $k++;
                    } elseif ($sum > $target) {
                        $l--;
                    } else {
                        $ans[] = [$nums[$i], $nums[$j], $nums[$k], $nums[$l]];
                        while ($k < $l && $nums[$k] === $nums[$k + 1]) {
                            $k++;
                        }
                        while ($k < $l && $nums[$l] === $nums[$l - 1]) {
                            $l--;
                        }
                        $k++;
                        $l--;
                    }
                }
            }
        }
        return $ans;
    }
}