<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function convertToBase7($num) {
        $res = '';
        $n = abs($num);
        do {
            $res .= ($n % 7);
            $n = intdiv($n, 7);
        }while($n);
        return ($num < 0 ? '-' : '').strrev($res);
    }
}