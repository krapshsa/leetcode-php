<?php

namespace App\BinaryTree\BinaryTree;

class MaximumDepthOfBinaryTree
{
    public function maxDepth(?TreeNode $root)
    {
        if (null === $root) {
            return 0;
        }
        $depth = 0;
        $queue = new \SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            $cnt = $queue->count();
            for ($i = 0; $i < $cnt; $i++) {
                $node = $queue->shift();
                if ($node->left) {
                    $queue->push($node->left);
                }
                if ($node->right) {
                    $queue->push($node->right);
                }
            }
            $depth++;
        }
        return $depth;
    }
}