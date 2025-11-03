<?php

class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        $len = strlen($word);
        $countCaps = 0; $countLowers = 0; $flagIdxCaps = false;
        for ($i = 0; $i < $len; $i++) {
            if ($i == 0 && $word[$i] >= 'A' && $word[$i] <= 'Z') {
                $flagIdxCaps = true;
                $countCaps++;
                continue;
            }
            if ($word[$i] >= 'A' && $word[$i] <= 'Z') {
                $countCaps++;
                continue;
            } else if ($word[$i] >= 'a' && $word[$i] <= 'z') {
                $countLowers++;
                continue;
            }
        }
        if ($countCaps === $len) return true;
        else if (($countCaps === 0) && ($countLowers === $len)) return true;
        else if (($countCaps === 1) && ($flagIdxCaps === true)) return true; 
        else return false;
    }
}