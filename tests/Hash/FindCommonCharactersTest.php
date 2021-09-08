<?php

namespace Test\BinaryTree\Hash;

use App\BinaryTree\Hash\FindCommonCharacters;
use PHPUnit\Framework\TestCase;

class FindCommonCharactersTest extends TestCase
{
    public function testCase1()
    {
        $findCommonCharacters = new FindCommonCharacters();
        $result = $findCommonCharacters->commonChars(['bella', 'label', 'roller']);
        self::assertEquals(['e', 'l', 'l'], $result);
    }

    public function testCase2()
    {
        $findCommonCharacters = new FindCommonCharacters();
        $result = $findCommonCharacters->commonChars(['cool', 'lock', 'cook']);
        self::assertEquals(['c', 'o'], $result);
    }
}
