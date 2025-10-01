class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $len = strlen($columnTitle);
        $num = 0;
        for ($i = 0; $i < $len; $i++) {
            $numExplode = (ord($columnTitle[$i]) % 65) + 1;
            $num = $num * 26 + $numExplode;
        }
        return $num;
    }
}