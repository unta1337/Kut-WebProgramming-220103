<?php
    $a = 1071;
    $b = 1029;

    $a = $a > 0 ? $a : -$a;
    $b = $b > 0 ? $b : -$b;

    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }

    echo $a;
?>