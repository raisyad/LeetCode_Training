class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $len = count($nums);
        sort($nums);
        $count = 1;
        $curr = $nums[0];
        $prev = $curr;
        for ($i = 1; $i < $len; $i++) {
            if ($count >= 2) return true;
            if ($curr == $nums[$i]) $count++;
            $curr = $nums[$i];
        }
        if ($count >= 2) return true;
        return false;
    }
}