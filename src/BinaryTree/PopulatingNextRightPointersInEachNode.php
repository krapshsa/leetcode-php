<?php

namespace App\BinaryTree\BinaryTree;

class PopulatingNextRightPointersInEachNode
{
    public function connect($root) {
        if (null === $root) {
            return null;
        }

        $queue = new \SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            $cnt = $queue->count();
            $pre = null;
            for ($i = 0; $i < $cnt; $i++) {
                $node = $queue->shift();
                $node->next = null;
                if ($pre) {
                    $pre->next = $node;
                }
                $pre = $node;
                if ($node->left) {
                    $queue->push($node->left);
                }
                if ($node->right) {
                    $queue->push($node->right);
                }
            }
        }
        return $root;
    }
}