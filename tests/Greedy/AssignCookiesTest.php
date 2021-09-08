<?php

namespace Test\BinaryTree\Greedy;

use App\BinaryTree\Greedy\AssignCookies;
use PHPUnit\Framework\TestCase;

class AssignCookiesTest extends TestCase
{
    public function test1()
    {
        $assignCookies = new AssignCookies();
        $result = $assignCookies->findContentChildren([1, 2, 3], [1, 1]);
        self::assertEquals(1, $result);
    }

    public function test2()
    {
        $assignCookies = new AssignCookies();
        $result = $assignCookies->findContentChildren([1, 2], [1, 2, 3]);
        self::assertEquals(2, $result);
    }

    public function test3()
    {
        $assignCookies = new AssignCookies();
        $result = $assignCookies->findContentChildren([1, 2, 3], [3]);
        self::assertEquals(1, $result);
    }
}
