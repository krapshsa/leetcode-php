<?php

namespace App\BinaryTree\BinaryTree;

class FindLargestValueInEachTreeRow
{
    public function largestValues(?TreeNode $root)
    {
        if (null === $root) {
            return [];
        }
        $result = [];
        $queue = new \SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            $values = [];
            $cnt = $queue->count();
            for ($i = 0; $i < $cnt; $i++) {
                $node = $queue->shift();
                $values[] = $node->val;
                if ($node->left) {
                    $queue->push($node->left);
                }
                if ($node->right) {
                    $queue->push($node->right);
                }
            }
            $max = max($values);
            $result[] = $max;
        }
        return $result;
    }
}