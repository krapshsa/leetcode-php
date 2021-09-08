<?php

namespace App\BinaryTree\Tree;

class MaximumDepthOfNaryTree
{
    public function maxDepth(?TreeNode $root): int
    {
        /*
        // 1. recursive
        // 2. end
        if (null === $root) {
            return 0;
        }
        // 3. logic
        $max = 0;
        for ($i = 0; $i < count($root->children); $i++) {
            $max = max($max, $this->maxDepth($root->children[$i]));
        }
        return 1 + $max;
        */
        if (null === $root) {
            return 0;
        }
        $maxDepth = 0;
        $stack = new \SplStack();
        $stack->push([$root, 1]);
        while (!$stack->isEmpty()) {
            list($node, $currentDepth) = $stack->pop();
            $maxDepth = max($maxDepth, $currentDepth);
            for ($i = 0; $i < count($node->children); $i++) {
                $stack->push([$node->children[$i], $currentDepth + 1]);
            }
        }
        return $maxDepth;
    }
}