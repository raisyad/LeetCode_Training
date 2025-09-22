class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $roman = (string)$s;
        $len = strlen($roman);
        $sum = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($roman[$i] == 'I') {
                if ($roman[$i+1] == 'V' && ($i+1) < $len){ $sum += 4; $i++; }
                else if ($roman[$i+1] == 'X' && ($i+1) < $len){ $sum += 9; $i++; }
                else $sum += 1;
            } else if ($roman[$i] == 'X') {
                if ($roman[$i+1] == 'L' && ($i+1) < $len){ $sum += 40; $i++; }
                else if ($roman[$i+1] == 'C' && ($i+1) < $len){ $sum += 90; $i++; }
                else $sum += 10;
            } else if ($roman[$i] == 'C') {
                if ($roman[$i+1] == 'D' && ($i+1) < $len){ $sum += 400; $i++; }
                else if ($roman[$i+1] == 'M' && ($i+1) < $len){ $sum += 900; $i++; }
                else $sum += 100;
            } else if ($roman[$i] == 'L') $sum += 50;
            else if ($roman[$i] == 'V') $sum += 5;
            else if ($roman[$i] == 'D') $sum += 500;
            else $sum += 1000;
        }
        return $sum;
    }
}