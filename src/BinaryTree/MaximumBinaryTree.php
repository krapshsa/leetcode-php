<?php

namespace App\BinaryTree\BinaryTree;

class MaximumBinaryTree
{
    public function constructMaximumBinaryTree(array $nums): ?TreeNode
    {
        // 1. recursive
        // 2. end
        if (empty($nums)) {
            return null;
        }
        // 3. logic
        $max = max($nums);
        $maxIndex = array_search($max, $nums);
        $leftNums = array_slice($nums, 0, $maxIndex);
        $rightNums = array_slice($nums, $maxIndex + 1, count($nums) - $maxIndex - 1);
        $root = new TreeNode($max);
        $root->left = $this->constructMaximumBinaryTree($leftNums);
        $root->right = $this->constructMaximumBinaryTree($rightNums);
        return $root;
    }
}