<?php

namespace App\BinaryTree\BinaryTree;

class CountCompleteTreeNodes
{
    public function countNodes(?TreeNode $root): int
    {
        /*
         * 2. end condition
         * left & right are null: 1
         */
        if (null === $root) {
            return 0;
        }
        if (null === $root->left && null === $root->right) {
            return 1;
        }
        /*
         * 3. logic of single level recursion
         * if full: (2 ^ height) - 1
         * if not full: 1 + f(left) + f(right)
         */
        $rHeight = 1;
        $right = $root->right;
        while ($right) {
            $rHeight++;
            $right = $right->right;
        }
        $lHeight = 1;
        $left = $root->left;
        while ($left) {
            $lHeight++;
            $left = $left->left;
        }
        // full
        if ($rHeight === $lHeight) {
            return pow(2, $lHeight) - 1;
        } else {
            return 1 + $this->countNodes($root->left) + $this->countNodes($root->right);
        }
    }

}