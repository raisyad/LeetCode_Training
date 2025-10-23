<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $arrUnique = array_unique($nums);
        rsort($arrUnique);
        return count($arrUnique) >= 3 ? $arrUnique[2] : $arrUnique[0];
    }
}