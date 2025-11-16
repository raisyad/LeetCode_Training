<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $k = 1;
        if (count($nums) == 0) return 0;
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] != $nums[$i-1]) {
                $nums[$k] = $nums[$i];
                $k++;
            }
        }
        return $k;
    }
}