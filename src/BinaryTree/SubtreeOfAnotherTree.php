<?php

namespace App\BinaryTree\BinaryTree;

class SubtreeOfAnotherTree
{
    public function isSubtree(?TreeNode $root, ?TreeNode $subRoot): bool
    {
        if (null === $root && null === $subRoot) {
            return true;
        }
        if (null === $root || null === $subRoot) {
            return false;
        }

        $queue = new \SplQueue();
        $queue->push($root);
        // 3. logic
        while (!$queue->isEmpty()) {
            $node = $queue->shift();
            // 1. recursive
            if ($this->compare($node, $subRoot)) {
                return true;
            } else {
                if ($node->left) {
                    $queue->push($node->left);
                }
                if ($node->right) {
                    $queue->push($node->right);
                }
            }
        }
        return false;
    }

    /**
     * @param TreeNode|null $root
     * @param TreeNode|null $subRoot
     */
    private function compare(?TreeNode $root, ?TreeNode $subRoot): bool
    {
        // 2. end
        if (null === $root && null === $subRoot) {
            return true;
        }
        if (null !== $root && null === $subRoot) {
            return false;
        }
        if (null === $root && null !== $subRoot) {
            return false;
        }
        if ($root->val !== $subRoot->val) {
            return false;
        }
        return $this->compare($root->left, $subRoot->left) && $this->compare($root->right, $subRoot->right);
    }
}