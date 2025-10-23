<?php

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {
        return bcadd($num1, $num2, 0);
    }
}