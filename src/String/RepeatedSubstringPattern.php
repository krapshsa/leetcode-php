<?php

namespace App\String;

class RepeatedSubstringPattern
{

    public function repeatedSubstringPattern(string $s)
    {
        // build next
        $len = strlen($s);
        $next = array_fill(0, $len, 0);
        // $j = 0;
        for ($i = 1; $i < $len; $i++) {
            // while ($j > 0 && $s[$j] !== $s[$i]) {
            //     $j = $next[$j - 1];
            // }
            // if ($s[$j] === $s[$i]) {
            //     $j++;
            // }
            // $next[$i] = $j;
            $j = $i - 1;
            while ($j > 0 && $s[$i] !== $s[$j]) {
                $j = $next[$j];
            }
            if ($s[$i] === $s[$j]) {
                $next[$i] = $j + 1;
            } else {
                $next[$i] = 0;
            }
        }

        $lastIdx = $len - 1;
        if (0 === $next[$lastIdx]) {
            return false;
        }
        $l = $len - $next[$lastIdx];
        if (0 === $next[$lastIdx] % $l) {
            return true;
        }
        return false;
    }
}