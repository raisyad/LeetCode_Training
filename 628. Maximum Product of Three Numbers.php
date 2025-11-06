<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumProduct($nums) {
        sort($nums, SORT_NUMERIC);
        $n = count($nums);
        $a = $nums[$n-1] * $nums[$n-2] * $nums[$n-3];
        $b = $nums[0] * $nums[1] * $nums[$n-1];
        return max($a, $b);
    }
}