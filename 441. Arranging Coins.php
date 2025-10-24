<?php 

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $count = 0;
        do {
            $count++;
            $n -= $count;
        }while ($n > $count);
        return $count;
    }
}