<?php
    $a = 1071;
    $b = 1029;

    $a = $a > 0 ? $a : -$a;
    $b = $b > 0 ? $b : -$b;

    $a_ = $a;
    $b_ = $b;

    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    $gcd = $a;
    $lcm = $a_ * $b_ / $gcd;

    echo $gcd."<br>";
    echo $lcm;
?>