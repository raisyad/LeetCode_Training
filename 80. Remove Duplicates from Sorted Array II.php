<?php 

class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $k = 1; $count = 1;
    for ($i = 1; $i < count($nums); $i++) {
        if ($nums[$i] == $nums[$i-1]) {
            if ($count < 2) {
                $nums[$k] = $nums[$i]; $k++; $count++;
            }
        } else if ($nums[$i] != $nums[$i-1]) {
            $nums[$k] = $nums[$i]; $k++;
            $count = 1;
        }
    }
    return $k;
}
}