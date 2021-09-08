<?php

namespace App\BinaryTree\BinaryTree;

use http\Exception\UnexpectedValueException;

class AverageofLevelsinBinaryTree
{
    public function averageOfLevels(?TreeNode $root)
    {
        $result = [];
        $queue = new \SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            $cnt = $queue->count();
            $values = [];
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
            $average = array_sum($values) / count($values);
            $result[] = $average;
        }
        return $result;
    }
}