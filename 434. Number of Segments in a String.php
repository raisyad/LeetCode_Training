<?php 

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSegments($s) {
        if (trim($s) === '') return 0;
        $clean = trim(preg_replace( '/\s+/', ' ', $s ));
        $count = 0;
        for ($i = 0; $i < strlen($clean); $i++) {
            if ($clean[$i] == ' ') $count++;
            else if ($i + 1 == strlen($clean)) $count++;
        }
        return $count;
    }
}