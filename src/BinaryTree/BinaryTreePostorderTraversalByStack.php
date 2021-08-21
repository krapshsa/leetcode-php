<?php

namespace App\BinaryTree;

class BinaryTreePostorderTraversalByStack
{
    public function postorderTraversal(?TreeNode $root)
    {
        if (null === $root) {
            return [];
        }

        $result = [];
        $stack = new \SplStack();
        $stack->push([$root, false]);
        while (!$stack->isEmpty()) {
            list($node, $isVisited) = $stack->pop();
            if ($isVisited) {
                $result[] = $node->val;
            } else {
                $stack->push([$node, true]);
                if ($node->right) {
                    $stack->push([$node->right, false]);
                }
                if ($node->left) {
                    $stack->push([$node->left, false]);
                }
            }
        }
        return $result;
    }
}