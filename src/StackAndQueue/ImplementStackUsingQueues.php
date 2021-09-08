<?php

namespace App\BinaryTree\StackAndQueue;

class ImplementStackUsingQueues
{
    private $queue;

    function __construct()
    {
        $this->queue = new \SplQueue();
    }

    function push($x)
    {
        $this->queue->push($x);
    }

    function pop()
    {
        for ($i = 0; $i < $this->queue->count() - 1; $i++) {
            $this->queue->push($this->queue->pop());
        }
        return $this->queue->pop();
    }

    function top()
    {
        for ($i = 0; $i < $this->queue->count() - 1; $i++) {
            $this->queue->push($this->queue->pop());
        }

        $result = $this->queue->pop();
        $this->queue->push($result);
        return $result;
    }

    function empty()
    {
        return $this->queue->isEmpty();
    }
}