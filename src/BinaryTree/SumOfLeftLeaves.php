<?php

namespace App\BinaryTree\BinaryTree;

use phpDocumentor\Reflection\Types\This;

class SumOfLeftLeaves
{
    public function sumOfLeftLeaves(?TreeNode $root): int
    {
        if (null === $root) {
            return 0;
        }
        if (null === $root->left && null === $root->right) {
            return 0;
        }

        if (null !== $root->left && null === $root->left->left && null === $root->left->right) {
            $leftSum = $root->left->val;
        } else {
            $leftSum = $this->sumOfLeftLeaves($root->left);
        }

        $rightSum = $this->sumOfLeftLeaves($root->right);

        return $leftSum + $rightSum;
    }
}