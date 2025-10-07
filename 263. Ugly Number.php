<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isUgly($n) {
        if ($n == 1) return true;
        if ($n < 1) return false;
        $posNum = [2, 3, 5];
        for ($i = 0; $i < count($posNum); $i++) {
            while ($n % $posNum[$i] == 0) {
                $n = floor($n / $posNum[$i]);
                if ($n == 1) return true;
            }
        }
        return false;
    }
}