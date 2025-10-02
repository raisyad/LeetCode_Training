class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $len = count($nums);
        $idx = [];
        for ($i = 0; $i < $len; $i++) {
            $value = $nums[$i];
            if (isset($idx[$value]) && $i - $idx[$value] <= $k) return true;

            $idx[$value] = $i;
       }
        return false;
    }
}