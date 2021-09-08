<?php

namespace App\BinaryTree\BinaryTree;

class SameTree
{
    public function isSameTree(?TreeNode $p, ?TreeNode $q)
    {
        if (null === $p && null === $q) {
            return true;
        }
        if (null === $p || null === $q) {
            return false;
        }
        $pQueue = new \SplQueue();
        $qQueue = new \SplQueue();
        $pValues = [];
        $qValues = [];

        $pQueue->push($p);
        while (!$pQueue->isEmpty()) {
            $node = $pQueue->shift();
            if (null !== $node) {
                $pValues[] = $node->val;
                $pQueue->push($node->left);
                $pQueue->push($node->right);
            } else {
                $pValues[] = null;
            }
        }

        $qQueue->push($q);
        while (!$qQueue->isEmpty()) {
            $node = $qQueue->shift();
            if (null !== $node) {
                $qValues[] = $node->val;
                $qQueue->push($node->left);
                $qQueue->push($node->right);
            } else {
                $qValues[] = null;
            }
        }

        return $pValues === $qValues;
    }
}