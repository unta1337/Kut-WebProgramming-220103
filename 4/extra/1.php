<?php
    $sum_3 = 0;
    $sum_7 = 0;

    for ($num = 200; $num <= 1000; $num++) {
        if ($num % 3 == 0)
            $sum_3 += $num;
        if ($num % 7 == 0)
            $sum_7 += $num;
    }

    echo "200부터 1000까지의 3의 배수 합: $sum_3<br>";
    echo "200부터 1000까지의 7의 배수 합: $sum_7";
?>