<?php

namespace App\BinaryTree;

class BinaryTreeLevelOrderTraversal
{
    public function levelOrder(?TreeNode $root)
    {
        if (null === $root) {
            return [];
        }
        $result = [];
        $splQueue = new \SplQueue();
        $splQueue->push([$root, 0]);
        while (!$splQueue->isEmpty()) {
            list($node, $level) = $splQueue->shift();
            if (isset($result[$level])) {
                $result[$level][] = $node->val;
            } else {
                $result[$level] = [$node->val];
            }
            if ($node->left) {
                $splQueue->push([$node->left, $level + 1]);
            }
            if ($node->right) {
                $splQueue->push([$node->right, $level + 1]);
            }
        }
        return $result;
    }
}