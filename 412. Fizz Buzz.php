<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $idx = 0;
        $answer = [];
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) $answer[$idx] = "FizzBuzz";
            else if ($i % 3 == 0) $answer[$idx] = "Fizz";
            else if ($i % 5 == 0) $answer[$idx] = "Buzz";
            else $answer[$idx] = (string)$i;
            $idx++;
        }
        return $answer;
    }
}