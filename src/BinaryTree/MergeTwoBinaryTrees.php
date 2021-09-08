<?php

namespace App\BinaryTree\BinaryTree;

class MergeTwoBinaryTrees
{
    public function mergeTrees(?TreeNode $root1, ?TreeNode $root2): ?TreeNode
    {
        $root = null;

        if (null === $root1 && null !== $root2) {
            $root = new TreeNode($root2->val);
            $root->left = $this->mergeTrees(null, $root2->left);
            $root->right = $this->mergeTrees(null, $root2->right);
        } elseif (null !== $root1 && null === $root2) {
            $root = new TreeNode($root1->val);
            $root->left = $this->mergeTrees($root1->left, null);
            $root->right = $this->mergeTrees($root1->right, null);
        } elseif (null !== $root1 && null !== $root2) {
            $root = new TreeNode($root1->val + $root2->val);
            $root->left = $this->mergeTrees($root1->left, $root2->left);
            $root->right = $this->mergeTrees($root1->right, $root2->right);
        }

        return $root;
    }
}