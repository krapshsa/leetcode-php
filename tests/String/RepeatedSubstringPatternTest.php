<?php

namespace Test\String;

use App\String\RepeatedSubstringPattern;
use PHPUnit\Framework\TestCase;

class RepeatedSubstringPatternTest extends TestCase
{
    public function test_abab()
    {
        $repeatedSubstringPattern = new RepeatedSubstringPattern();
        $result = $repeatedSubstringPattern->repeatedSubstringPattern('abab');
        self::assertEquals(true, $result);
    }

    public function test_abac()
    {
        $repeatedSubstringPattern = new RepeatedSubstringPattern();
        $result = $repeatedSubstringPattern->repeatedSubstringPattern('abac');
        self::assertEquals(false, $result);
    }

    public function test_aba()
    {
        $repeatedSubstringPattern = new RepeatedSubstringPattern();
        $result = $repeatedSubstringPattern->repeatedSubstringPattern('aba');
        self::assertEquals(false, $result);
    }

    public function test_abcabcabcabc()
    {
        $repeatedSubstringPattern = new RepeatedSubstringPattern();
        $result = $repeatedSubstringPattern->repeatedSubstringPattern('abcabcabcabc');
        self::assertEquals(true, $result);
    }

}
