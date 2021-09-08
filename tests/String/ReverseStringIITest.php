<?php

namespace Test\BinaryTree\String;

use App\BinaryTree\String\ReverseStringII;
use PHPUnit\Framework\TestCase;

class ReverseStringIITest extends TestCase
{
    public function test_abcdefg_with_k2()
    {
        $reverseStringII = new ReverseStringII();
        $result = $reverseStringII->reverseStr('abcdefg', 2);
        self::assertEquals('bacdfeg', $result);
    }

    public function test_abcd_with_k2()
    {
        $reverseStringII = new ReverseStringII();
        $result = $reverseStringII->reverseStr('abcd', 2);
        self::assertEquals('bacd', $result);
    }

    public function test_abcd_with_k1()
    {
        $reverseStringII = new ReverseStringII();
        $result = $reverseStringII->reverseStr('abcd', 1);
        self::assertEquals('abcd', $result);
    }

    public function test_abcdefg_with_k8()
    {
        $reverseStringII = new ReverseStringII();
        $result = $reverseStringII->reverseStr('abcdefg', 8);
        self::assertEquals('gfedcba', $result);
    }
}
