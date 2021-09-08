<?php

namespace App\BinaryTree\BinaryTree;

class ConstructBinaryTreeFromInorderAndPostorderTraversal
{
    public function buildTree(array $inorder, array $postorder): TreeNode
    {
        // inorder:   [ (left), mid, (right) ]
        // postorder: [ (left), (right), mid ]
        // find mid first in postorder
        $midValue = $postorder[count($postorder) - 1];
        // find num of left / right
        // find mid in inorder
        $midInorderIndex = array_search($midValue, $inorder);
        $numLeft = $midInorderIndex;
        $numRight = count($inorder) - $numLeft - 1;
        $root = new TreeNode($midValue);
        if (0 === $numLeft) {
            $root->left = null;
        } else {
            $root->left = $this->buildTree(
                array_slice($inorder, 0, $numLeft),
                array_slice($postorder, 0, $numLeft)
            );
        }
        if (0 === $numRight) {
            $root->right = null;
        } else {
            $root->right = $this->buildTree(
                array_slice($inorder, $midInorderIndex + 1, $numRight),
                array_slice($postorder, $numLeft, $numRight)
            );
        }
        return $root;
    }
}