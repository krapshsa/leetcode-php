<?php

namespace App\BinaryTree\BinaryTree;

class MinimumAbsoluteDifferenceInBST
{
    public function getMinimumDifference(?TreeNode $root)
    {
        $values = [];
        $stack = new \SplStack();
        $stack->push([$root, false]);
        while (!$stack->isEmpty()) {
            list($node, $isVisited) = $stack->pop();
            if ($isVisited) {
                $values[] = $node->val;
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
        $diff = PHP_INT_MAX;
        for ($i = 1; $i < count($values); $i++) {
            $newDiff = $values[$i] - $values[$i - 1];
            $diff = $newDiff < $diff ? $newDiff : $diff;
        }

        return $diff;
    }
}