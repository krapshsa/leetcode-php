<?php

namespace App\BinaryTree\BinaryTree;

class BinaryTreeRightSideView
{
    public function rightSideView(?TreeNode $root)
    {
        if (null === $root) {
            return [];
        }
        $allValues = [];
        $queue = new \SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            $cnt = $queue->count();
            $values = [];
            for ($i = 0; $i < $cnt; $i++) {
                $node = $queue->shift();
                $values[] = $node->val;
                if ($node->right) {
                    $queue->push($node->right);
                }
                if ($node->left) {
                    $queue->push($node->left);
                }
            }
            $allValues[] = $values;
        }

        $result = [];
        for ($i = 0; $i < count($allValues); $i++) {
            $result[] = $allValues[$i][0];
        }
        return $result;
    }
}