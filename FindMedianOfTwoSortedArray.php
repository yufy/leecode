<?php

class FindMedianOfTwoSortedArray
{
    /**
     * @param array $nums1
     * @param array $nums2
     * @return float
     */
    public function solution($nums1, $nums2)
    {
        $nums = array_merge($nums1, $nums2);
        sort($nums);

        $count = count($nums);
        $index = (int)($count / 2);
        if ($count % 2 == 0) {
            return (Float)(($nums[$index - 1] + $nums[$index]) / 2);
        } else {
            return (Float)$nums[$index];
        }
    }
}

$obj = new FindMedianOfTwoSortedArray();

var_dump($obj->solution([1, 3], [2]));
var_dump($obj->solution([1, 2], [3, 4]));