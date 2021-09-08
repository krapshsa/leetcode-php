<?php

namespace App\BinaryTree\BinaryTree;

class PathSum
{
    public function hasPathSum(?TreeNode $root, int $targetSum): bool
    {
        if (null === $root) {
            return false;
        }

        $sum = 0;
        $stack = new \SplStack();
        $stack->push([$root, false]);
        while (!$stack->isEmpty()) {
            list($node, $isVisited) = $stack->pop();
            if ($isVisited) {
                $sum -= $node->val;
            } else {
                $sum += $node->val;
                if (null === $node->left && null === $node->right) {
                    // leave
                    if ($sum === $targetSum) {
                        return true;
                    } else {
                        $sum -= $node->val;
                    }
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
        }
        return false;
    }
}