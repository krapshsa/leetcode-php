<?php

namespace App\BinaryTree;

class BinaryTreePreorderTraversal
{
    public function preorderTraversal(?TreeNode $root): array
    {
        if (null === $root) {
            return [];
        } else {
            return array_merge(
                [$root->val],
                $this->preorderTraversal($root->left),
                $this->preorderTraversal($root->right)
            );
        }
    }
}