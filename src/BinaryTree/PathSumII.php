<?php

namespace App\BinaryTree\BinaryTree;

class PathSumII
{
    public function pathSum(?TreeNode $root, int $targetSum)
    {
        if (null === $root) {
            return [];
        }
        $ans = [];
        $stack = new \SplStack();
        $stack->push([$root, []]);
        while (!$stack->isEmpty()) {
            list($node, $pathList) = $stack->pop();
            $pathList[] = $node->val;
            // leaf
            if (null === $node->left && null === $node->right) {
                if ($targetSum === array_sum($pathList)) {
                    $ans[] = $pathList;
                }
            } else {
                if ($node->right) {
                    $stack->push([$node->right, $pathList]);
                }
                if ($node->left) {
                    $stack->push([$node->left, $pathList]);
                }
            }
        }
        return $ans;
    }
}