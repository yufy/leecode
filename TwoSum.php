<?php

class TwoSum
{
    /**
     * @param Integer[] $nums 
     * @param Integer $target
     * @return Integer[]
     */
    public function solution($nums, $target)
    {
        if (!$nums) {
            return [];
        }

        $maps = [];
        foreach ($nums as $key => $value) {
            $tmp = $target - $value;
            if (isset($maps[$tmp])) {
                return [$maps[$tmp], $key];
            } else {
                $maps[$value] = $key;
            }
        }

        return [];
    }
}
