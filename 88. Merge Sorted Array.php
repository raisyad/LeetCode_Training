<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    // function merge(&$nums1, $m, $nums2, $n) {
        
    // }
    function merge (&$nums1, $m, $nums2, $n) {
        $idxM = $m-1; $idxN = $n-1; $tail = $m+$n-1;
        while ($idxN>=0) {
            if ($idxM >= 0 && $nums1[$idxM] > $nums2[$idxN]) {
                $nums1[$tail] = $nums1[$idxM];
                $idxM--;
            } else {
                $nums1[$tail] = $nums2[$idxN];
                $idxN--;
            }
            $tail--;
        }
    }
}