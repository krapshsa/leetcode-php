<?php

namespace App\BinaryTree\BinaryTree;

class InvertBinaryTree
{
    public function invertTree(?TreeNode $root)
    {
        if (null === $root) {
            return null;
        }
        $queue = new \SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            $cnt = $queue->count();
            for ($i = 0; $i < $cnt; $i++) {
                $node = $queue->shift();
                $tmp = $node->left;
                $node->left = $node->right;
                $node->right = $tmp;
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