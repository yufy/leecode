<?php

class LongestSubstringWithoutRepeatingCharacters
{
    /**
     * 使用滑动窗口，判断值是否已在窗口中，如果是则删掉最左边的值，否则加入窗口
     * 计算窗口大小
     * @param String $s
     * @return Integer
     */
    public function solution($s)
    {
        if (!$s) {
            return 0;
        }

        $maps = [];
        $left = $right = 0;
        $maxLen = 0;
        $len = strlen($s);

        while ($left < $len && $right < $len) {
            if (!isset($maps[$s[$right]])) {
                $maps[$s[$right]] = 1;
                $right++;
                $maxLen = max(($right - $left), $maxLen);
            } else {
                unset($maps[$s[$left]]);
                $left++;
            }
            
        }

        return $maxLen;
    }
}

$obj = new LongestSubstringWithoutRepeatingCharacters();
var_dump($obj->solution('abcabcbb'));
var_dump($obj->solution('bbbbbb'));
var_dump($obj->solution('pwwkew'));
var_dump($obj->solution(" "));