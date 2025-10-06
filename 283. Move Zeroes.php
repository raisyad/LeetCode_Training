<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $len = count($nums);
        $idxChange = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($nums[$i] != 0) {
                $temp = $nums[$idxChange];
                $nums[$idxChange] = $nums[$i];
                $nums[$i] = $temp;
                $idxChange++;
            }
        }
    }
}