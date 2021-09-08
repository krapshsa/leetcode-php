<?php


namespace App\BinaryTree\ArrayStructure;


class SpiralMatrixII
{

    /**
     * @param Integer $n
     * @return Integer[][]
     */
    function generateMatrix($n)
    {
        $result = array_fill(0, $n, array_fill(0, $n, 0));
        $cur = 1;
        $m = $n;
        $x = 0;
        $y = 0;
        while ($m > 1) {
            // left
            for ($i = 0; $i < $m - 1; $i++) {
                $result[$x][$y++] = $cur++;
            }
            // top
            for ($i = 0; $i < $m - 1; $i++) {
                $result[$x++][$y] = $cur++;
            }
            // right
            for ($i = 0; $i < $m - 1; $i++) {
                $result[$x][$y--] = $cur++;
            }
            // bottom
            for ($i = 0; $i < $m - 1; $i++) {
                $result[$x--][$y] = $cur++;
            }

            $x++;
            $y++;
            $m -= 2;
        }

        if (1 === $m) {
            $result[$x][$y] = $cur;
        }

        return $result;
    }
}