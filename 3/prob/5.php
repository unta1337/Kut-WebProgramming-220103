<?php
    $price = 30000;
    $service = "매우 만족";
    echo "서비스 만족도: $service<br>";

    if ($service == '매우 만족')
        $tip = $price * 0.2;
    else if ($service == '만족')
        $tip = $price * 0.1;
    else
        $tip = $price * 0.05;

    echo "팁: {$tip}원";
?>