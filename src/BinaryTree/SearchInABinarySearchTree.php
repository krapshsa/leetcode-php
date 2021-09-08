<?php

namespace App\BinaryTree\BinaryTree;

class SearchInABinarySearchTree
{
    public function searchBST(?TreeNode $root, int $val): ?TreeNode
    {
        if (null === $root) {
            return null;
        } elseif ($val === $root->val) {
            return $root;
        } elseif ($root->val < $val) {
            if ($root->right) {
                return $this->searchBST($root->right, $val);
            }
        } else {
            if ($root->left) {
                return $this->searchBST($root->left, $val);
            }
        }

        return null;
    }
}