<?php

namespace Test\BinaryTree;

use App\BinaryTree\TreeNode;

trait Buildable
{
    public function buildBinaryTree(array $input): ?TreeNode
    {
        if (empty($input)) {
            return null;
        }
        $rootNode = new TreeNode(array_shift($input));
        $queue = [$rootNode];
        while (count($queue) > 0) {
            $middle = array_shift($queue);
            if (!empty($input)) {
                $leftVal = array_shift($input);
                if (null === $leftVal) {
                    $middle->left = null;
                } else {
                    $leftNode = new TreeNode($leftVal);
                    $queue[] = $leftNode;
                    $middle->left = $leftNode;
                }
            }
            if (!empty($input)) {
                $rightVal = array_shift($input);
                if (null === $rightVal) {
                    $middle->right = null;
                } else {
                    $rightNode = new TreeNode($rightVal);
                    $queue[] = $rightNode;
                    $middle->right = $rightNode;
                }
            }
        }
        return $rootNode;
    }
}