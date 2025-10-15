<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $counts = array_count_values(str_split($s));
        $len = strlen($s);
        for ($i = 0; $i < $len; $i++) if ($counts[$s[$i]] == 1) return $i;
        return -1;
    }
}