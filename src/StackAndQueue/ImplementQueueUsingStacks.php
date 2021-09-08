<?php

namespace App\BinaryTree\StackAndQueue;

class ImplementQueueUsingStacks
{
    private $stackIn;
    private $stackOut;

    /**
     * Initialize your data structure here.
     */
    function __construct()
    {
        $this->stackIn = new \SplStack();
        $this->stackOut = new \SplStack();
    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        $this->stackIn->push($x);
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop()
    {
        if ($this->stackOut->isEmpty()) {
            $this->fillStackOut();
        }
        return $this->stackOut->pop();
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek()
    {
        if ($this->stackOut->isEmpty()) {
            $this->fillStackOut();
        }
        return $this->stackOut->top();
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty()
    {
        return $this->stackIn->isEmpty() && $this->stackOut->isEmpty();
    }

    private function fillStackOut(): void
    {
        while (!$this->stackIn->isEmpty()) {
            $this->stackOut->push($this->stackIn->pop());
        }
    }
}