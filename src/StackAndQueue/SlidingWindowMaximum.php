<?php

namespace App\BinaryTree\StackAndQueue;

class SlidingWindowMaximum
{
    public function maxSlidingWindow($nums, $k)
    {
        $result = [];
        $queue = new \SplQueue();
        for ($i = 0; $i < $k; $i++) {
            while (!$queue->isEmpty() && $nums[$i] > $queue->top()) {
                $queue->pop();
            }
            $queue->push($nums[$i]);
        }
        $result[] = $queue->bottom();

        for ($i = $k; $i < count($nums); $i++) {
            while (!$queue->isEmpty() && $nums[$i] > $queue->top()) {
                $queue->pop();
            }
            if (!$queue->isEmpty() && $nums[$i - $k] === $queue->bottom()) {
                $queue->shift();
            }
            $queue->push($nums[$i]);
            $result[] = $queue->bottom();
        }

        return $result;
    }
}