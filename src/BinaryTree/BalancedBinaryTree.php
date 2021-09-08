<?php

namespace App\BinaryTree\BinaryTree;

class BalancedBinaryTree
{
    public function isBalanced(?TreeNode $root)
    {
        if (null === $root) {
            return true;
        }

        /*
         * 原本想用遞迴做，但是設計遞迴的時候要同時檢查 balance 跟 height
         * 覺得這個 function 做兩件事情不太應該
         * 但是用 stack 寫完發現更醜
         */
        $nodeStack = new \SplStack();
        $nodeStack->push([$root, false]);
        $depthStack = new \SplStack();
        while (!$nodeStack->isEmpty()) {
            list($node, $isVisited) = $nodeStack->pop();
            if ($isVisited) {
                $rightDepth = $depthStack->pop();
                $leftDepth = $depthStack->pop();
                if (1 < abs($rightDepth - $leftDepth)) {
                    return false;
                } else {
                    $depthStack->push(1 + max($rightDepth, $leftDepth));
                }
            } elseif (null === $node) {
                $depthStack->push(0);
            } else {
                $nodeStack->push([$node, true]);
                $nodeStack->push([$node->right, false]);
                $nodeStack->push([$node->left, false]);
            }
        }
        return true;
    }
}