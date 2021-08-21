<?php

namespace Test\StackAndQueue;

use App\StackAndQueue\EvaluateReversePolishNotation;
use PHPUnit\Framework\TestCase;

class EvaluateReversePolishNotationTest extends TestCase
{
    public function test1()
    {
        $evaluateReversePolishNotation = new EvaluateReversePolishNotation();
        $result = $evaluateReversePolishNotation->evalRPN(['2', '1', '+', '3', '*']);
        self::assertEquals(9, $result);
    }

    public function test2()
    {
        $evaluateReversePolishNotation = new EvaluateReversePolishNotation();
        $result = $evaluateReversePolishNotation->evalRPN(['4','13','5','/','+']);
        self::assertEquals(6, $result);
    }

    public function test3()
    {
        $evaluateReversePolishNotation = new EvaluateReversePolishNotation();
        $result = $evaluateReversePolishNotation->evalRPN(['10','6','9','3','+','-11','*','/','*','17','+','5','+']);
        self::assertEquals(22, $result);
    }
}
