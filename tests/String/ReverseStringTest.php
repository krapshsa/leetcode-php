<?php

namespace Test\String;

use App\String\ReverseString;
use PHPUnit\Framework\TestCase;

class ReverseStringTest extends TestCase
{
    public function testReverseHell()
    {
        $str = ['h', 'e', 'l', 'l', 'o'];
        $reverseString = new ReverseString();
        $reverseString->reverseString($str);
        self::assertEquals(['o', 'l', 'l', 'e', 'h'], $str);
    }

    public function testReverseSingleChar()
    {
        $str = ['a'];
        $reverseString = new ReverseString();
        $reverseString->reverseString($str);
        self::assertEquals(['a'], $str);
    }

    public function testReverseTwoChars()
    {
        $str = ['a','b'];
        $reverseString = new ReverseString();
        $reverseString->reverseString($str);
        self::assertEquals(['b', 'a'], $str);
    }

    public function testReverseHannah()
    {
        $str = ['H', 'a', 'n', 'n', 'a', 'h'];
        $reverseString = new ReverseString();
        $reverseString->reverseString($str);
        self::assertEquals(['h', 'a', 'n', 'n', 'a', 'H'], $str);
    }
}
