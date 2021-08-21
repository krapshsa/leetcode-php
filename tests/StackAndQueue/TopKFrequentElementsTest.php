<?php

namespace Test\StackAndQueue;

use App\StackAndQueue\TopKFrequentElements;
use PHPUnit\Framework\TestCase;

class TopKFrequentElementsTest extends TestCase
{
    public function testNormal()
    {
        $topKFrequentElements = new TopKFrequentElements();
        $result = $topKFrequentElements->topKFrequent([1, 1, 1, 2, 2, 3], 2);
        sort($result);
        self::assertEquals([1, 2], $result);
    }

    public function testSingle()
    {
        $topKFrequentElements = new TopKFrequentElements();
        $result = $topKFrequentElements->topKFrequent([1], 1);
        sort($result);
        self::assertEquals([1], $result);
    }
}
