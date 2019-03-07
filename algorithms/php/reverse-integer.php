<?php

/**
 * @param $num
 * @return int
 */
function reverseInteger($num)
{
    $sign = 1;
    $ans  = 0;
    if ($num < 0) {
        $sign = -1;
        $num  *= -1;
    }

    while ($num > 0) {
        $tmp = $num % 10;
        $ans = $ans * 10 + $tmp;

        $num = intval($num / 10);
    }

    $ans *= $sign;

    if ($ans > PHP_INT_MAX || $ans < PHP_INT_MIN) {
        return 0;
    }
    return $ans;
}