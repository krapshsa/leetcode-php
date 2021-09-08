<?php

namespace App\BinaryTree\BinaryTree;

class FindBottomLeftTreeValue
{
    public function findBottomLeftValue(?TreeNode $root)
    {
        if (null === $root) {
            return 0;
        }
        $queue = new \SplQueue();
        $queue->push($root);
        $value = null;
        while (!$queue->isEmpty()) {
            $levelNodeCnt = $queue->count();
            for ($i = 0; $i < $levelNodeCnt; $i++) {
                $node = $queue->shift();
                if ($node->left) {
                    $queue->push($node->left);
                }
                if ($node->right) {
                    $queue->push($node->right);
                }
                if (0 === $i) {
                    $value = $node->val;
                }
            }
        }
        return $value;
    }
}