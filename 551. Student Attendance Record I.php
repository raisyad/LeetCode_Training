<?php 

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {
        $len = strlen($s);
        $countA = 0; $countL = 0; $countP = 0;
        $index = []; $idx = 0;
        for ($i = 0; $i<$len; $i++) {
            if ($s[$i] == 'A') $countA++;
            else if ($s[$i] == 'L') {
                $countL++;
                $index[$idx] = $i;
                $idx++;
            } 
            else if ($s[$i] == 'P') $countP++;
        }
        if ($countA >= 2) return false;

        if ($countL < 3) return true;

        for ($i = 0; $i+2< $idx; $i++) {
            if (($index[$i] + 1 === $index[$i+1]) && ($index[$i+1] + 1 === $index[$i+2])) return false;
        }
        
        return true;
    }
}