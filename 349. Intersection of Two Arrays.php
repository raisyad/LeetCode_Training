<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $len1 = count($nums1);
        $len2 = count($nums2);
        $buck = [];

        for ($i = 0; $i < $len2; $i++) {
            for ($z = 0; $z < $len1; $z++) {
                if ($nums2[$i] == $nums1[$z]) {
                    $alreadyExist = false;
                    for ($k = 0; $k < count($buck); $k++) {
                        if ($buck[$k] == $nums2[$i]) {
                            $alreadyExist = true;
                            break;
                        }
                    }
                    if (!$alreadyExist) $buck[] = $nums2[$i];
                    break;
                }
                else continue;
            }
        }
        return $buck;
    }
}