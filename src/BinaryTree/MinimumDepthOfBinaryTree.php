<?php

namespace App\BinaryTree\BinaryTree;

class MinimumDepthOfBinaryTree
{
    public function minDepth(?TreeNode $root)
    {
        if (null === $root) {
            return 0;
        }
        $minDepth = -1;
        $depth = 0;
        $queue = new \SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            $depth++;
            $cnt = $queue->count();
            for ($i = 0; $i < $cnt; $i++) {
                $node = $queue->shift();
                if (!$node->left && !$node->right) {
                    $minDepth = -1 === $minDepth ? $depth : min($minDepth, $depth);
                } else {
                    if ($node->left) {
                        $queue->push($node->left);
                    }
                    if ($node->right) {
                        $queue->push($node->right);
                    }
                }
            }
        }
        return $minDepth;
    }
}