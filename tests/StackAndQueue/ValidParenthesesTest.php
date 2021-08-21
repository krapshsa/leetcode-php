<?php

namespace Test\StackAndQueue;

use App\StackAndQueue\ValidParentheses;
use PHPUnit\Framework\TestCase;

class ValidParenthesesTest extends TestCase
{
    public function testParentheses()
    {
        $validParentheses = new ValidParentheses();
        $result = $validParentheses->isValid('()');
        self::assertEquals(true, $result);
    }


    public function testParenthesesSquareCurly()
    {
        $validParentheses = new ValidParentheses();
        $result = $validParentheses->isValid('()[]{}');
        self::assertEquals(true, $result);
    }

    public function testSquareInCurly()
    {
        $validParentheses = new ValidParentheses();
        $result = $validParentheses->isValid('{[]}');
        self::assertEquals(true, $result);
    }


    public function testFalse1()
    {
        $validParentheses = new ValidParentheses();
        $result = $validParentheses->isValid('(]');
        self::assertEquals(false, $result);
    }

    public function testFalse2()
    {
        $validParentheses = new ValidParentheses();
        $result = $validParentheses->isValid('([)]');
        self::assertEquals(false, $result);
    }

}
