<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $sArr = str_split($s);
        $tArr = str_split($t);
        $lenS = count($sArr);
        $lenT = count($tArr);
        sort($sArr);
        sort($tArr);
        $len = ($lenS >= $lenT) ? $lenS : $lenT;
        for ($i = 0; $i < $len; $i++) {
            if ($sArr[$i] == $tArr[$i]) continue;
            else return $tArr[$i];
        }
    }
}