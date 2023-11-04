<?php

function mini_max_sum($arr)
{
    $min = $arr[0];
    $max = $arr[0];
    $sum = array_sum($arr);

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }

        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }

        $sum_min = $sum - $max;
        $sum_max = $sum - $min;
    }

    return $sum_min . ' ' . $sum_max;
}

$arr = array(1, 2, 3, 4, 5);
echo mini_max_sum($arr);
