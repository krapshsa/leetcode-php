<?php

namespace App\BinaryTree\BinaryTree;

class BinaryTreeLevelOrderTraversalII
{
    public function levelOrderBottom(?TreeNode $root)
    {
        $result = [];
        $queue = new \SplQueue();

        if (null === $root) {
            return $result;
        }

        $queue->push($root);
        while (!$queue->isEmpty()) {
            $levelNodeCnt = $queue->count();
            $currentLevelValues = [];

            for ($i = 0; $i < $levelNodeCnt; $i++) {
                $node = $queue->shift();
                $currentLevelValues[] = $node->val;
                if ($node->left) {
                    $queue->push($node->left);
                }
                if ($node->right) {
                    $queue->push($node->right);
                }
            }

            $result[] = $currentLevelValues;
        }

        return array_reverse($result);
    }
}