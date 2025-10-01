class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $curr = 0;
        $prev = 1;
        $countPrev = 0;
        $countCurr = 0;
        $numMajor = 1;
        $len = count($nums);
        
        sort($nums);
        for ($i = 0; $i < $len; $i++) {
            $curr = $nums[$i];
            if ($i == 0) {
                $prev = $nums[$i];
                $numMajor = $curr;
                $countCurr++;
                continue;
            }

            if ($prev != $curr) {
                if ($countCurr > $countPrev) {
                    $numMajor = $prev;
                    $countPrev = $countCurr;
                }
                $prev = $curr;
                $countCurr = 1;
            } else {
                $prev = $curr;
                $countCurr++;
            }
        }
        if ($countCurr > $countPrev) $numMajor = $prev;
        return $numMajor;
    }
}