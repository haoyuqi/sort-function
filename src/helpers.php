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

if (!function_exists('quick_sort')) {
    /**
     * 快速排序
     * @param array $arr
     * @return array
     */
    function quick_sort(array $arr)
    {
        $count = count($arr);
        if ($count < 2) {
            return $arr;
        }

        $middle = $arr[0];
        $leftArray = $rightArray = [];

        for ($i = 1; $i < $count; $i++) {
            if ($arr[$i] < $middle) {
                $leftArray[] = $arr[$i];
            } else {
                $rightArray[] = $arr[$i];
            }
        }

        return array_merge(quick_sort($leftArray), [$middle], quick_sort($rightArray));
    }
}

if (!function_exists('select_sort')) {
    /**
     * 选择排序
     * @param array $arr
     * @return array
     */
    function select_sort(array $arr)
    {
        $count = count($arr);
        if ($count < 2) {
            return $arr;
        }

        for ($i = 0; $i < $count - 1; $i++) {
            $key = $i;

            for ($k = $i + 1; $k < $count; $k++) {
                if ($arr[$key] > $arr[$k]) {
                    $key = $k;
                }
            }

            if ($key != $i) {
                $temp = $arr[$key];
                $arr[$key] = $arr[$i];
                $arr[$i] = $temp;
            }
        }

        return $arr;
    }
}
