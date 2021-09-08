<?php

namespace App\BinaryTree\BinaryTree;

class ValidateBinarySearchTree
{
    public function isValidBST(?TreeNode $root): bool
    {
        if (null === $root->left && null === $root->right) {
            return true;
        }
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
        for ($i = 1; $i < count($values); $i++) {
            if ($values[$i - 1] >= $values[$i]) {
                return false;
            }
        }
        return true;
    }
}