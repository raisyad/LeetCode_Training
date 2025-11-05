<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arrayPairSum($nums) {
        sort($nums);
        $len = count($nums);
        $sum = 0; $temp = 0;
        for ($i = 0; $i < $len; $i+=2) {
            $temp = min($nums[$i], $nums[$i+1]);
            $sum += $temp;
        }

        return $sum;
    }
}