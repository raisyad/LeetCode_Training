<?php

class Solution {

    /**
     * @param Integer[] $score
     * @return String[]
     */
    function findRelativeRanks($score) {
        $len = count($score);
        $sortedScore = $score;
        rsort($sortedScore);

        $res = [];
        $ans = [];
        $idx = 0;

        for ($i = 0; $i<$len; $i++) {
            if ($i == 0) {$res[$sortedScore[$idx]] .= "Gold Medal"; $idx++;}
            else if ($i == 1) {$res[$sortedScore[$idx]] .= "Silver Medal"; $idx++;}
            else if ($i == 2) {$res[$sortedScore[$idx]] .= "Bronze Medal"; $idx++;}
            else {$res[$sortedScore[$idx]] = (string) ($i + 1); $idx++;}
        }
        
        for ($x = 0; $x<$len; $x++) {
            $ans[] = $res[$score[$x]];
        }
        
        return $ans;
    }
}