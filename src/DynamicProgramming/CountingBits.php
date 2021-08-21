<?php

namespace App\DynamicProgramming;

class CountingBits
{
    function countBits($n)
    {
        $ans = [];
        $ans[] = 0;
        for ($i = 1; $i <= $n; $i++) {
            $pre = (int)($i / 2);
            $mod = $i % 2;
            $ans[] = $ans[$pre] + $mod;
        }

        return $ans;
    }
}