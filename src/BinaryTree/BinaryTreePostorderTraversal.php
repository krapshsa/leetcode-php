<?php

namespace App\BinaryTree\BinaryTree;

class BinaryTreePostorderTraversal
{
    public function postorderTraversal(?TreeNode $root)
    {
        if (null === $root) {
            return [];
        }
        return array_merge(
            $this->postorderTraversal($root->left),
            $this->postorderTraversal($root->right),
            [$root->val]
        );
    }
}