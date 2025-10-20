<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $i = 0; $y = 0;
        $lenS = strlen($s);
        $lenT = strlen($t);
        while ($i < $lenS && $y < $lenT) {
            if ($s[$i] == $t[$y]) $i++;
            $y++;
        }
        
        return $i == $lenS;
    }
}