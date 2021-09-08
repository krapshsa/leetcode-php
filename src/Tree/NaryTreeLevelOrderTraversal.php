<?php

namespace App\BinaryTree\Tree;

class NaryTreeLevelOrderTraversal
{
    public function levelOrder(?TreeNode $root)
    {
        if (null === $root) {
            return [];
        }
        $result = [];
        $queue = new \SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            // get number of nodes in current level
            $nodeCnt = $queue->count();
            $nodeValues = [];
            // traversal all nodes in current level & push childs to queue
            // after this loop, we only have nodes of next level in queue.
            for ($i = 0; $i < $nodeCnt; $i++) {
                $node = $queue->shift();
                $nodeValues[] = $node->val;
                $childCnt = count($node->children);
                for ($j = 0; $j < $childCnt; $j++) {
                    $queue->push($node->children[$j]);
                }
            }
            $result[] = $nodeValues;
        }
        return $result;
    }
}