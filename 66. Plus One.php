class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $len = count($digits);
        $countNine = 0;
        if ($len < 2 && $digits[0] == 9) {
            $digits[0] = 1; $digits[1] = 0;
        } else {
            for ($i = $len-1; $i >= 0; $i--) {
                if ($digits[$i] < 9) {
                    $digits[$i]++; return $digits;
                } else if ($digits[$i] == 9) {
                    $countNine++;
                }
                $digits[$i] = 0;
            }
            if ($countNine == $len) {
                for ($i = $len; $i >= 0; $i--) {
                    if ($i == 0) $digits[$i] = 1;
                    else $digits[$i] = 0;
                }
            }
        }
        return $digits;
    }
}