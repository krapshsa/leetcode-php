<?php

namespace App\BinaryTree;

class TreeNode
{
    public int $val;
    public ?TreeNode $left;
    public ?TreeNode $right;
    public ?TreeNode $next;
    function __construct($val = 0)
    {
        $this->val   = $val;
        $this->left  = null;
        $this->right = null;
        $this->next  = null;
    }
}