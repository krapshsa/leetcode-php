<?php

namespace App\BinaryTree\BinaryTree;

class BinaryTreePaths
{
    public function binaryTreePaths(?TreeNode $root)
    {
        // 1. recursive
        // 2. end
        if (null === $root) {
            return [];
        }
        if (null === $root->left && null === $root->right) {
            return ["" . $root->val];
        }
        $fn = function ($path) use ($root) {
            return $root->val . '->' . $path;
        };
        // 3. logic
        return array_merge(
            array_map($fn, $this->binaryTreePaths($root->left)),
            array_map($fn, $this->binaryTreePaths($root->right))
        );
    }
}