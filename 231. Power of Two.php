<?php
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if ($n == 1) return true;
        $curr = 1;
        while ($curr < $n){
            $curr *= 2;
        }
        if ($curr <= $n) return true;
        return false;
    }
}