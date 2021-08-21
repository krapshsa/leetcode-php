<?php

namespace App\Hash;

class FindCommonCharacters
{

    public function commonChars(array $words)
    {
        $charCnt = 26;
        $hash = array_fill(0, $charCnt, 0);
        $ans = [];
        $word = $words[0];
        for ($j = 0; $j < strlen($word); $j++) {
            $index = ord($word[$j]) - ord('a');
            $hash[$index]++;
        }
        for ($i =1; $i < count($words); $i++) {
            $hashTemp = array_fill(0, $charCnt, 0);
            $word = $words[$i];
            for ($j = 0; $j < strlen($word); $j++) {
                $index = ord($word[$j]) - ord('a');
                $hashTemp[$index]++;
            }
            for ($j = 0; $j < $charCnt; $j++) {
                $hash[$j] = min($hash[$j], $hashTemp[$j]);
            }
        }
        for ($i = 0; $i < $charCnt; $i++) {
            $count = $hash[$i];
            for ($j = 0; $j < $count; $j++) {
                $ans[] = chr($i + ord('a'));
            }
        }
        return $ans;
    }
}