<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $highestCount = 0;
        $count = 0;
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            if ($nums[$i] == 1) $count++;
            else {
                if ($count > $highestCount) $highestCount = $count;
                $count = 0;
            }
        }
        return $highestCount > $count ? $highestCount : $count;
    }
}