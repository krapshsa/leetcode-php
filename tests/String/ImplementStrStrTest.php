<?php

namespace Test\BinaryTree\String;

use App\BinaryTree\String\ImplementStrStr;
use PHPUnit\Framework\TestCase;

class ImplementStrStrTest extends TestCase
{
    public function testHello()
    {
        $implementStrStr = new ImplementStrStr();
        $result = $implementStrStr->strStr('hello', 'll');
        self::assertEquals(2, $result);
    }


    public function testAaaaa()
    {
        $implementStrStr = new ImplementStrStr();
        $result = $implementStrStr->strStr('aaaaa', 'bba');
        self::assertEquals(-1, $result);
    }

    public function testaabaabaafa()
    {
        $implementStrStr = new ImplementStrStr();
        $result = $implementStrStr->strStr('aabaabaaf', 'aabaaf');
        self::assertEquals(3, $result);
    }

    public function testEmpty()
    {
        $implementStrStr = new ImplementStrStr();
        $result = $implementStrStr->strStr('', '');
        self::assertEquals(0, $result);
    }

}
