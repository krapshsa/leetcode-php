<?php

namespace App\BinaryTree\Hash;

class FourSumII
{

    public function fourSumCount(array $nums1, array $nums2, array $nums3, array $nums4)
    {
        $count = 0;
        $hash = [];
        $n = count($nums1);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $sum = $nums1[$i] + $nums2[$j];
                if (isset($hash[$sum])) {
                    $hash[$sum]++;
                } else {
                    $hash[$sum] = 1;
                }
            }
        }

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $sum = $nums3[$i] + $nums4[$j];
                $target = 0 - $sum;
                if (isset($hash[$target])) {
                    $count += $hash[$target];
                }
            }
        }

        return $count;
    }
}