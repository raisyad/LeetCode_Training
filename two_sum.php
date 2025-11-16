<?php
class Solution {
    
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for ($countA = 0; $countA < count($nums); $countA++){
            for ($countB = $countA + 1; $countB < count($nums); $countB++){
                if ($nums[$countA] + $nums[$countB] == $target) return [$countA, $countB];
            }
        }
    }
}

$solution = new Solution();
$result = $solution->twoSum([3, 2, 2, 3], 4);

print_r($result);
