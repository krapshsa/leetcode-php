<?php

namespace App\BinaryTree\Hash;

use phpDocumentor\Reflection\Types\True_;

class HappyNumber
{

    public function isHappy(int $n)
    {
        $hash = [];
        while (true) {
            if (isset($hash[$n])) {
                return false;
            }

            $m = 0;
            $temp = $n;
            while ($temp > 0) {
                $mod = $temp % 10;
                $temp = (int)($temp / 10);
                $m += $mod * $mod;
            }

            if (1 === $m) {
                return true;
            } else {
                $hash[$n] = true;
                $n = $m;
            }
        }
    }
}