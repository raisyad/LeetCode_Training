<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $num = (string)$x;
        $len = strlen($num);

        for ($i = 0; $i < $len/2; $i++) {
            if ($num[$i] == $num[$len - $i - 1]) continue;
            else return false;
        }
        return true;
    }
}