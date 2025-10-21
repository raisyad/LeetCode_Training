<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function toHex($num) {
        return dechex($num & 0xFFFFFFFF);
    }
}