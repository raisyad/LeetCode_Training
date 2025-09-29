class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $len = strlen($s);
        $isMerge = '';
        if ($s == ' ') return true;

        for ($i = 0; $i < $len; $i++) {
            $o = ord($s[$i]);
            $isDigit = ($o >= 48 && $o <= 57);
            $isLower = ($o >= 97 && $o <= 122);
            $isUpper = ($o >= 65 && $o <= 90);
            if ($isDigit || $isLower || $isUpper) {
                if ($isUpper) $o += 32;
                $isMerge .= chr($o);
            }
        }
        $s = (string)$isMerge;
        $len = strlen($s);
        for ($i = 0; $i < $len/2; $i++) {
            if ($s[$i] == $s[$len - $i - 1]) continue;
            else return false;
        }
        return true;
    }
}