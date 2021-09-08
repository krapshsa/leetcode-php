<?php

namespace App\BinaryTree\String;

class ReverseStringII
{

    public function reverseStr(string $s, int $k)
    {
        $ret = '';
        $left = strlen($s);
        $offset = 0;
        while ($left >= 2 * $k) {
            $ret .= strrev(substr($s, $offset, $k));
            $ret .= substr($s, $offset + $k, $k);

            $offset += 2 * $k;
            $left -= 2 * $k;
        }

        if ($left > 0) {
            if ($left >= $k) {
                $ret .= strrev(substr($s, $offset, $k));
                $ret .= substr($s, $offset + $k);
            } else {
                $substr = substr($s, $offset);
                $ret .= strrev($substr);
            }
        }

        return $ret;
    }
}