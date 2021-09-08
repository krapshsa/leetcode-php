<?php

namespace App\BinaryTree\Hash;

class IntersectionofTwoArrays
{

    public function intersection(array $nums1, array $nums2)
    {
        $hash = [];
        $ans = [];
        for ($i = 0; $i < count($nums1); $i++) {
            $n = $nums1[$i];
            $hash[$n] = false;
        }
        for ($i = 0; $i < count($nums2); $i++) {
            $m = $nums2[$i];
            if (isset($hash[$m])) {
                $hash[$m] = true;
            }
        }
        foreach ($hash as $key => $value) {
            if ($value) {
                $ans[] = $key;
            }
        }
        return $ans;
    }
}