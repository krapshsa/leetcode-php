<?php

namespace App\BinaryTree\Hash;

class ThreeSum
{

    public function threeSum(array $nums)
    {
        $len = count($nums);
        $ans = [];

        if ($len < 3) {
            return [];
        }

        sort($nums);
        for ($i = 0; $i < $len - 2; $i++) {
            $j = $i + 1;
            $k = $len - 1;

            if ($nums[$i] > 0) {
                break;
            }
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }
            while ($j < $k) {
                $sum = $nums[$i] + $nums[$j] + $nums[$k];

                if (0 < $sum) {
                    $k--;
                } elseif (0 > $sum) {
                    $j++;
                } else {
                    $ans[] = [$nums[$i], $nums[$j], $nums[$k]];
                    while ($j < $k && $nums[$k] === $nums[$k - 1]) {
                        $k--;
                    }
                    while ($j < $k && $nums[$j] === $nums[$j + 1]) {
                        $j++;
                    }
                    $k--;
                    $j++;
                }
            }
        }

        return $ans;
    }
}