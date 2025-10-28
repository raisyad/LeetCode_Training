<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {
        $len1 = count($nums1);
        $len2 = count($nums2);
        $res = [];

        for ($i = 0; $i<$len1; $i++) {
            $foundIndex = -1;
            for ($y = 0; $y<$len2; $y++) {
                if (($nums1[$i] == $nums2[$y])) {
                    $foundIndex = $y;
                    break;
                }
            }

            $nextGreater = -1;
            if ($foundIndex !== -1) {
                for ($x = $foundIndex+1; $x <= $len2; $x++) {
                    if ($nums2[$x] > $nums1[$i]) {
                        $nextGreater = $nums2[$x];
                        break;
                    }
                }
            }

            $res[] = $nextGreater;
        }
        return $res;
    }
}