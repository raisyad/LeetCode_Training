class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $res = '';
        while($columnNumber >= 1){
            $columnNumber--;
            $strExplode = chr(($columnNumber % 26) + 65);
            $res = $strExplode . $res;
            $columnNumber = (int)$columnNumber / 26;
        }
        return $res;
    }
}