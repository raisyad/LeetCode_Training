<?php 

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $ransomArr = str_split($ransomNote);
        $magazineArr = str_split($magazine);

        sort($ransomArr);
        sort($magazineArr);

        print_r($ransomArr);
        print_r($magazineArr);

        $lenR = count($ransomArr);
        $lenM = count($magazineArr);
        $i = 0; $y = 0; $countSimilar = 0; $temp = [];

        while ($i < $lenR) {
            $found = false;
            for (; $y < $lenM; $y++) {
                if ($ransomArr[$i] != $magazineArr[$y]) continue;

                $found = true;
                $countSimilar++;
                $y++;
                break;
            }
            if (!$found) return false;
            $i++;
        }
        
        return $countSimilar == $lenR;
    }
}