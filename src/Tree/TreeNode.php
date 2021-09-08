<?php

namespace App\BinaryTree\Tree;

class TreeNode
{
    public $val = null;
    public $children = null;
    function __construct($val = 0) {
        $this->val = $val;
        $this->children = [];
    }
}