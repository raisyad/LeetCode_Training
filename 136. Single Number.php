<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $len = count($nums);
        $check = [];
        if ($len <= 1 && $nums[0] > 0) return $len;

        for ($i = 0; $i < $len; $i++) {
            $x = $nums[$i];
            $check[$x] = ($check[$x] ?? 0) + 1;
        }
        asort($check);

        foreach ($check as $angka => $jumlah) {
            return $angka;
        }
    }
}