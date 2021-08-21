<?php

namespace App\StackAndQueue;

class ValidParentheses
{

    public function isValid(string $s)
    {
        $stack = new \SplStack();
        for ($i = 0; $i < strlen($s); $i++) {
            $newChar = $s[$i];
            if ($stack->isEmpty()) {
                $stack->push($newChar);
            } else {
                $lastChr = $stack->pop();
                $isMatch = $lastChr === '(' && $newChar === ')'
                    || $lastChr === '[' && $newChar === ']'
                    || $lastChr === '{' && $newChar === '}';
                if (false === $isMatch) {
                    $stack->push($lastChr);
                    $stack->push($newChar);
                }
            }
        }

        return $stack->isEmpty();
    }
}