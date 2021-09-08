<?php

namespace App\BinaryTree\StackAndQueue;

class EvaluateReversePolishNotation
{
    public function evalRPN($tokens)
    {
        $stack = new \SplStack();
        for ($i = 0; $i < count($tokens); $i++) {
            $token = $tokens[$i];
            if (in_array($token, ['+', '-', '*', '/'])) {
                $right = $stack->pop();
                $left  = $stack->pop();
                switch ($token) {
                    case '+':
                        $stack->push($left + $right);
                        break;
                    case '-':
                        $stack->push($left - $right);
                        break;
                    case '*':
                        $stack->push($left * $right);
                        break;
                    case '/':
                        $stack->push((int)($left / $right));
                        break;
                }
            } else {
                $stack->push((int)$token);
            }
        }
        return $stack->pop();
    }
}