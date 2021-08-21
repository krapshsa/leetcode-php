<?php

namespace App\Hash;

class RansomNote
{

    public function canConstruct(string $ransomNote, string $magazine)
    {
        $result = true;
        $hash = array_fill(0, 26, 0);
        for ($i = 0; $i < strlen($magazine); $i++) {
            $index = ord($magazine[$i]) - ord('a');
            $hash[$index]++;
        }
        for ($i = 0; $i < strlen($ransomNote); $i++) {
            $index = ord($ransomNote[$i]) - ord('a');
            if ($hash[$index] > 0) {
                $hash[$index]--;
            } else {
                $result = false;
                break;
            }
        }
        return $result;
    }
}