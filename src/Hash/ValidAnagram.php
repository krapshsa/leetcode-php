<?php

namespace App\BinaryTree\Hash;

class ValidAnagram
{

    public function isAnagram(string $s, string $t)
    {
        if (strlen($s) !== strlen($t)) {
            return false;
        }
        $hash = array_fill(0, 26, 0);
        for ($i = 0; $i < strlen($s); $i++) {
            $index = ord($s[$i]) - ord('a');
            $hash[$index]++;
        }
        for ($i = 0; $i < strlen($t); $i++) {
            $index = ord($t[$i]) - ord('a');
            if ($hash[$index] > 0) {
                $hash[$index]--;
            } else {
                return false;
            }
        }

        return true;
    }
}