<?php

namespace App\String;

class ImplementStrStr
{

    public function strStr(string $haystack, string $needle)
    {
        // $result = strpos($haystack, $needle);
        // return $result === false ? -1 : $result;
        $needleLen = strlen($needle);
        $haystackLen = strlen($haystack);
        if (0 === $needleLen) {
            return 0;
        }
        if ($needleLen > $haystackLen) {
            return -1;
        }

        $next = $this->getNext($needle, $needleLen);
        $j = 0;
        for ($i = 0; $i < $haystackLen; $i++) {
            while ($j > 0 && $haystack[$i] !== $needle[$j]) {
                $j = $next[$j - 1];
            }
            if ($needle[$j] === $haystack[$i]) {
                $j++;
            }
            if ($j === $needleLen) {
                return $i - $needleLen + 1;
            }
        }

        return -1;
    }

    private function getNext(string $needle, int $needleLen): array
    {
        $next = array_fill(0, $needleLen, 0);
        $j = 0;
        for ($suffixEndIdx = 1; $suffixEndIdx < $needleLen; $suffixEndIdx++) {
            while ($j > 0 && $needle[$j] !== $needle[$suffixEndIdx]) {
                $j = $next[$j - 1];
            }
            if ($needle[$j] === $needle[$suffixEndIdx]) {
                $j++;
            } else {
                $next[$suffixEndIdx] = 0;
            }
            $next[$suffixEndIdx] = $j;
        }
        return $next;
    }
}