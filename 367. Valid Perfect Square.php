<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        $check = sqrt($num);
        return $check == intval($check);
    }
}