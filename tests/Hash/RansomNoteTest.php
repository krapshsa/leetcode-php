<?php

namespace Test\BinaryTree\Hash;

use App\BinaryTree\DynamicProgramming\RansomNote;
use PHPUnit\Framework\TestCase;

class RansomNoteTest extends TestCase
{
    public function test_a_b()
    {
        $ransomNote = new RansomNote();
        $result = $ransomNote->canConstruct('a', 'b');
        self::assertEquals(false, $result);
    }

    public function test_aa_ab()
    {
        $ransomNote = new RansomNote();
        $result = $ransomNote->canConstruct('aa', 'ab');
        self::assertEquals(false, $result);
    }

    public function test_aa_aab()
    {
        $ransomNote = new RansomNote();
        $result = $ransomNote->canConstruct('aa', 'aab');
        self::assertEquals(true, $result);
    }
}
