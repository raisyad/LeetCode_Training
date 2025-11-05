<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $len = strlen($s);
        $rev = ""; $res = ""; $temp = [];
        $idx = 0; $flag = false;
        
        for ($i = $len-1; $i >= 0; $i--) {
            if ($s[$i] === ' ') {
                $temp[$idx] = $rev;
                if ($flag) $temp[$idx] .= ' ';
                $rev = '';
                $flag = true;
                $idx++;
            } else {
                $rev .= $s[$i];
            }
        }
        if ($rev !== '') {
            $temp[$idx] = $rev;
            if ($flag) $temp[$idx] .= ' ';
            $rev = '';
            $idx++;
        }

        for ($i = $idx-1; $i >= 0; $i--) {
            $res .= $temp[$i];
        }
        
        return $res;
    }
}