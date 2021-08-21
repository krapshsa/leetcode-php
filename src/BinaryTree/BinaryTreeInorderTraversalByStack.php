<?php

namespace App\BinaryTree;

use Test\BinaryTree\Buildable;

class BinaryTreeInorderTraversalByStack
{
    public function inorderTraversal(?TreeNode $root)
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
                if ($node->right) {
                    $stack->push([$node->right, false]);
                }
                $stack->push([$node, true]);
                if ($node->left) {
                    $stack->push([$node->left, false]);
                }
            }
        }
        return $result;
    }
}