<?php

namespace App\BinaryTree;

class FindModeInBinarySearchTree
{
    public function findMode(?TreeNode $root): array
    {
        if (null === $root) {
            return [];
        }
        $result = [];
        $count = 0;
        $maxCount = 0;
        $pre = $root;
        $stack = new \SplStack();
        $stack->push([$root, false]);
        while (!$stack->isEmpty()) {
            [$node, $isVisited] = $stack->pop();
            if ($isVisited) {
                if (null === $pre) { // root
                    $count = 1;
                } elseif ($node->val === $pre->val) { // same value
                    $count++;
                } else { // different value, clear value counter
                    $count = 1;
                }

                if ($maxCount < $count) { // larger than old max count, clear old result
                    $maxCount = $count;
                    $result = [$node->val];
                } elseif ($maxCount === $count) { // can add to result
                    $result[] = $node->val;
                }

                $pre = $node;
            } else {
                // must be in-order ( left <= mid <= right)
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