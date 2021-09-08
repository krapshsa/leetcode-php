<?php

namespace Test\BinaryTree\Backtracking;

use App\BinaryTree\Backtracking\LetterCombinationsOfAPhoneNumber;
use PHPUnit\Framework\TestCase;

class LetterCombinationsOfAPhoneNumberTest extends TestCase
{
    public function test1()
    {
        $letterCombinationsOfAPhoneNumber = new LetterCombinationsOfAPhoneNumber();
        $result = $letterCombinationsOfAPhoneNumber->letterCombinations("23");
        self::assertEquals(["ad","ae","af","bd","be","bf","cd","ce","cf"], $result);
    }

    public function test2()
    {
        $letterCombinationsOfAPhoneNumber = new LetterCombinationsOfAPhoneNumber();
        $result = $letterCombinationsOfAPhoneNumber->letterCombinations("2");
        self::assertEquals(["a","b","c"], $result);
    }
}
