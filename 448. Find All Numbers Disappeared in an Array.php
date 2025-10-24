<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $len = count($nums);
        $flag = []; $arr = [];
        foreach ($nums as $n) if (is_int($n)) if ($n >= 1 && $n <= $len) $seen[$n] = true;
        for ($i = 1; $i <= $len; $i++) if (!isset($seen[$i])) $arr[] = $i;

        return $arr;
    }
}