<?php

namespace App\BinaryTree;

class LowestCommonAncestorOfABinaryTree
{
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    public function lowestCommonAncestor(TreeNode $root, TreeNode $p, TreeNode $q): TreeNode
    {
        $path = [];
        $pathP = [];
        $pathQ = [];
        $stack = new \SplStack();
        $stack->push([$root, false]);
        while (!$stack->isEmpty()) {
            [$node, $isVisited] = $stack->pop();
            if ($isVisited) {
                if ($node->val === $p->val) {
                    $pathP = $path;
                } elseif ($node->val === $q->val) {
                    $pathQ = $path;
                }
                array_pop($path);
                if (!empty($pathP) && !empty($pathQ)) {
                    // find two
                    break;
                }
            } else {
                $path[] = $node;
                $stack->push([$node, true]);
                if ($node->right) {
                    $stack->push([$node->right, false]);
                }
                if ($node->left) {
                    $stack->push([$node->left, false]);
                }
            }
        }

        $result = $pathP[0];
        for ($i = 1; $i < min(count($pathP), count($pathQ)); $i++) {
            if ($pathP[$i]->val === $pathQ[$i]->val) {
                $result = $pathP[$i];
            }
        }
        return $result;
    }
}