<?php

namespace Test\String;

use App\String\ReverseWordsInAString;
use PHPUnit\Framework\TestCase;

class ReverseWordsInAStringTest extends TestCase
{
    public function test1()
    {
        $reverseWordsInAString = new ReverseWordsInAString();
        $result = $reverseWordsInAString->reverseWords('the sky is blue');
        self::assertEquals('blue is sky the', $result);
    }

}
