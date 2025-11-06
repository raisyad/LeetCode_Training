<?php

class Solution {

    /**
     * @param Integer[] $candyType
     * @return Integer
     */
    function distributeCandies($candyType) {
        $lenCandies = count($candyType) / 2;
        $uniqueCandies = array_unique($candyType);
        return $lenCandies <= count($uniqueCandies) ? $lenCandies : count($uniqueCandies);
    }
}