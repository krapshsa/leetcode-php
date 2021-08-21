<?php

namespace App\StackAndQueue;

class RemoveAllAdjacentDuplicatesInString
{

    public function removeDuplicates(string $s)
    {
        $result = '';
        $stack = new \SplStack();

        for ($i = 0; $i < strlen($s); $i++) {
            $newChr = $s[$i];
            if ($stack->isEmpty()) {
                $stack->push($newChr);
            } else {
                $lastChr = $stack->pop();
                if ($lastChr !== $newChr) {
                    $stack->push($lastChr);
                    $stack->push($newChr);
                }
            }
        }

        while (!$stack->isEmpty()) {
            $result .= $stack->pop();
            $result = strrev($result);
        }
        return $result;
    }
}