<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        $number_as_string = (string)$num;
        $len = strlen($number_as_string);
        $lenCurr= 0;
        $sum = 0;

        while ($i < $len) {
            $sum += $number_as_string[$i];

            if (($i == $len-1) && (strlen((string)$sum) > 1)) {
                $num = $sum;
                $number_as_string = (string)$num;
                $len = strlen($number_as_string);
                $i = 0;
                $sum = 0;
            } else $i++;
        }

        return $sum;
    }
}