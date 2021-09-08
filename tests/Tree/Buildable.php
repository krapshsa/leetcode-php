<?php

namespace Test\BinaryTree\Tree;

use App\BinaryTree\Tree\TreeNode;

trait Buildable
{
    public function buildTree(array $input): ?TreeNode
    {
        if (empty($input)) {
            return null;
        }
        $dummyRoot = new TreeNode();
        $queue = new \SplQueue();
        $cur = $dummyRoot;
        for ($i = 0; $i <= count($input); $i++) {
            if ($i === count($input) || null === $input[$i]) {
                // do nothing
                $cur = $queue->shift();
            } else {
                $newNode = new TreeNode($input[$i]);
                $cur->children[] = $newNode;
                $queue->push($newNode);
            }
        }

        return $dummyRoot->children[0];
    }
}