<?php

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $len = count($words);
        $rows = [];
        $rows[0] = ['q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p'];
        $rows[1] = ['a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l'];
        $rows[2] = ['z', 'x', 'c', 'v', 'b', 'n', 'm'];
        $lowerCaseArray = array_map('strtolower', $words);
        $res = [];

        for ($i = 0; $i<$len; $i++) {
            $currentWord = $lowerCaseArray[$i];
            $lenStr = strlen($currentWord);

            $firstChar = $currentWord[0];
            $targetRowIndex = null;

            for ($r = 0; $r < 3; $r++) {
                if (in_array($firstChar, $rows[$r])) {
                    $targetRowIndex = $r;
                    break;
                }
            }

            if ($targetRowIndex === null) continue;

            $isValid = true;
            for ($s = 1; $s < $lenStr; $s++) {
                $strs = $currentWord[$s];
                if (!in_array($strs, $rows[$targetRowIndex])) {
                    $isValid = false;
                    break;
                }
            }

            if ($isValid) $res[] = $words[$i];
        }

        return $res;
    }
}