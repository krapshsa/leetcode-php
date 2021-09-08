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

    /**
     * @param $result
     * @return array
     */
    public function getLevelOrderValues($result): array
    {
        $levelOrderValues = [];
        $queue = new \SplQueue();
        $queue->push($result);
        while (!$queue->isEmpty()) {
            $node = $queue->shift();
            if ($node) {
                $levelOrderValues[] = $node->val;
                $queue->push($node->left);
                $queue->push($node->right);
            } else {
                $levelOrderValues[] = null;
            }
        }
        for ($i = count($levelOrderValues) - 1; $i >= 0; $i--) {
            if (null === $levelOrderValues[$i]) {
                unset($levelOrderValues[$i]);
            } else {
                break;
            }
        }
        return $levelOrderValues;
    }
}