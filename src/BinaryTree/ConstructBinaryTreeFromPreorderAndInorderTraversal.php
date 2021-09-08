<?php

namespace App\BinaryTree\BinaryTree;

class ConstructBinaryTreeFromPreorderAndInorderTraversal
{
    private array $preorder;
    private array $inorder;

    public function traversal($preorderBegin, $inorderBegin, $inorderEnd): TreeNode
    {
        // preorder: [mid, (left), (right)]
        // inorder : [(left), mid, (right)]
        $midValue = $this->preorder[$preorderBegin];
        $inorderMidIndex = -1;
        for ($i = $inorderBegin; $i <= $inorderEnd; $i++) {
            if ($this->inorder[$i] === $midValue) {
                $inorderMidIndex = $i;
                break;
            }
        }

        $leftCnt = $inorderMidIndex - $inorderBegin;
        $rightCnt = $inorderEnd - $inorderBegin - $leftCnt;

        $root = new TreeNode($midValue);
        if ($leftCnt > 0) {
            $root->left = $this->traversal(
                $preorderBegin + 1,
                $inorderBegin,
                $inorderBegin + $leftCnt - 1
            );
        } else {
            $root->left = null;
        }
        if ($rightCnt > 0) {
            $root->right = $this->traversal(
                $preorderBegin + $leftCnt + 1,
                $inorderBegin + $leftCnt + 1,
                $inorderEnd
            );
        } else {
            $root->right = null;
        }
        return $root;
    }

    public function buildTree(array $preorder, array $inorder): TreeNode
    {
        $this->preorder = $preorder;
        $this->inorder = $inorder;
        return $this->traversal(0, 0, count($inorder) - 1);
    }
}