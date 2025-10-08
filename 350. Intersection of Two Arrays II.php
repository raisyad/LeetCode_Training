<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $buck = [];
        $idx = 0;
    
        for ($i = 0; $i < count($nums2); $i++) {
            $hasEntried = false;
            for ($z = 0; $z < count($nums1); $z++) {
                if ($nums2[$i] === $nums1[$z]) {
                    if (!$hasEntried) {
                        $buck[$idx] = $nums2[$i];
                        $hasEntried = true;
                        $nums1[$z] = null;
                        $idx++;
                    } else break;
                }
                else continue;
            }
        }
        return $buck;
    }
}