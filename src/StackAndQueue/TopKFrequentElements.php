<?php

namespace App\StackAndQueue;

class CustomSplProorityQueue extends \SplPriorityQueue
{
    public function compare($priority1, $priority2)
    {
        return $priority2 - $priority1;
    }
}

class TopKFrequentElements
{
    public function topKFrequent(array $nums, int $k)
    {
        $result = [];
        $map = [];
        for ($i = 0; $i < count($nums); $i++) {
            $num = $nums[$i];
            if (isset($map[$num])) {
                $map[$num]++;
            } else {
                $map[$num] = 1;
            }
        }

        $queue = new CustomSplProorityQueue();
        $queue->setExtractFlags(\SplPriorityQueue::EXTR_DATA);
        foreach ($map as $num => $cnt) {
            $queue->insert($num, $cnt);
            if ($queue->count() > $k) {
                $queue->extract();
            }
        }

        $queue->top();
        while ($queue->valid()) {
            $result[] = $queue->current();
            $queue->next();
        }

        return $result;
    }
}