<?php

namespace Test\Hash;

use App\Hash\ValidAnagram;
use PHPUnit\Framework\TestCase;

class ValidAnagramTest extends TestCase
{
    public function testNormal()
    {
        $validAnagram = new ValidAnagram();
        $result = $validAnagram->isAnagram('anagram', 'nagaram');
        self::assertEquals(true, $result);
    }

    public function testNormalFalse()
    {
        $validAnagram = new ValidAnagram();
        $result = $validAnagram->isAnagram('rat', 'car');
        self::assertEquals(false, $result);
    }

}
