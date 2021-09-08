<?php

namespace App\BinaryTree\Greedy;

class AssignCookies
{
    public function findContentChildren(array $g, array $s): int
    {
        sort($g);
        sort($s);
        $j = 0;
        $cnt = 0;
        for ($i = 0; $i < count($g); $i++) {
            for (; $j < count($s); $j++) {
                if ($s[$j] >= $g[$i]) {
                    $cnt++;
                    $j++;
                    break;
                }
            }
        }
        return $cnt;
    }
}