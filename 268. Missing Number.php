<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $len = count($nums);
        $init = $nums[0];
        $mark = 0;
        $curr = 0;
        sort($nums);
        if ($nums[0] != 0) return 0;
        if ($len == 1) return ++$nums[0];

        for ($i = 1; $i < $len; $i++) {
            $curr = $nums[$i-1];
            if ($curr == $nums[$i]) continue;
            else {
                if ((++$curr) == $nums[$i]) continue;
                else return --$nums[$i];
            }
        }
        return ++$curr;
    }
}