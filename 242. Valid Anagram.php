<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $explodeStringSstring = str_split($s);
        $explodeStringTstring = str_split($t);
        sort($explodeStringSstring);
        sort($explodeStringTstring);
        if (count($explodeStringSstring) != count($explodeStringTstring)) return false;
        $idxT = 0;
        for ($i = 0; $i < count($explodeStringSstring); $i++) {
            if ($explodeStringSstring[$i] != $explodeStringTstring[$idxT]) return false;
            $idxT++;
        }

        return true;
    }
}