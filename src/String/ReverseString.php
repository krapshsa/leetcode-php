<?php

namespace App\String;

class ReverseString
{
    public function reverseString(array &$s): void
    {
        $len = count($s);
        $head = 0;
        $end = $len - 1;
        while ($head < $end) {
            $tmp = $s[$head];
            $s[$head] = $s[$end];
            $s[$end] = $tmp;
            $head++;
            $end--;
        }
    }
}