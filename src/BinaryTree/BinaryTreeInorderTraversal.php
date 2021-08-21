<?php

namespace App\BinaryTree;

class BinaryTreeInorderTraversal
{
    public function inorderTraversal(?TreeNode $root)
    {
        if (null === $root) {
            return [];
        }
        return array_merge(
            $this->inorderTraversal($root->left),
            [$root->val],
            $this->inorderTraversal($root->right)
        );
    }
}