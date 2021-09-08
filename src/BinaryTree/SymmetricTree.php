<?php

namespace App\BinaryTree\BinaryTree;

use phpDocumentor\Reflection\Types\This;

class SymmetricTree
{
    public function isSymmetric(?TreeNode $root): bool
    {
        // 1. recursive function: compare two leaves
        return $this->compare($root->left, $root->right);
    }

    /**
     * @param TreeNode|null $left
     * @param TreeNode|null $right
     */
    private function compare(?TreeNode $left, ?TreeNode $right): bool
    {
        // 2. end
        if (null === $left && null === $right) {
            return true;
        }
        if (null === $left || null === $right) {
            return false;
        }
        if ($left->val !== $right->val) {
            return false;
        }

        // 3. logic of using recursive function
        return $this->compare($left->left, $right->right) && $this->compare($left->right, $right->left);
    }
}