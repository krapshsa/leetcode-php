<?php

namespace App\BinaryTree\String;

class ReverseWordsInAString
{

    public function reverseWords(string $s)
    {
        $result = $this->myTrim($s);

        // reverse the string
        $len = strlen($result);
        $this->reverse($result, 0, $len);

        $head = 0;
        while ($head < $len) {
            $end = strpos($result, ' ', $head);
            if (false === $end) {
                $this->reverse($result, $head, $len - $head);
                break;
            } else {
                $this->reverse($result, $head, $end - $head);
                $head = $end + 1;
            }
        }

        return $result;
    }

    private function reverse(&$s, $head, $len)
    {
        $end = $head + $len - 1;
        while ($head < $end) {
            $temp = $s[$head];
            $s[$head] = $s[$end];
            $s[$end] = $temp;
            $head++;
            $end--;
        }
    }

    private function myTrim(string $s)
    {
        $len = strlen($s);
        $result = '';

        // erase the whitespace
        $idx = 0;
        while (' ' === $s[$idx] && $idx < $len) {
            $idx++;
        }
        while ($idx < $len) {
            if (' ' === $s[$idx]) {
                while ($idx < $len && ' ' === $s[$idx]) {
                    $idx++;
                }
                if ($idx < $len) {
                    $result .= ' ';
                }
            } else {
                $result .= $s[$idx];
                $idx++;
            }
        }
        return $result;
    }
}