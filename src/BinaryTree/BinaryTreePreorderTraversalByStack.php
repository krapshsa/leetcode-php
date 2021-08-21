<?php

namespace App\BinaryTree;

class BinaryTreePreorderTraversalByStack
{
    public function preorderTraversal(?TreeNode $root)
    {
        if (null === $root) {
            return [];
        }

        $result = [];
        $stack = new \SplStack();
        $stack->push($root);
        while (!$stack->isEmpty()) {
            $node = $stack->pop();
            $result[] = $node->val;
            if (null !== $node->right) {
                $stack->push($node->right);
            }
            if (null !== $node->left) {
                $stack->push($node->left);
            }
        }
        return $result;
    }
}