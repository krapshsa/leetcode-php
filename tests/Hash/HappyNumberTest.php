<?php

namespace Test\BinaryTree\Hash;

use App\BinaryTree\Hash\HappyNumber;
use PHPUnit\Framework\TestCase;

class HappyNumberTest extends TestCase
{
    public function testHappy()
    {
        $happyNumber = new HappyNumber();
        $result = $happyNumber->isHappy(19);
        self::assertEquals(true, $result);
    }

    public function testNotHappy()
    {
        $happyNumber = new HappyNumber();
        $result = $happyNumber->isHappy(2);
        self::assertEquals(false, $result);
    }

}
