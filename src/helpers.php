<?php

if (!function_exists('bubble_sort')) {
    /**
     * 冒泡排序
     * @param array $arr
     * @return array
     */
    function bubble_sort(array $arr)
    {
        $count = count($arr);

        if ($count < 2) {
            return $arr;
        }

        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }
        }

        return $arr;
    }
}