<?php
    $power_usage = 2200;
    $power_usage_ = $power_usage;
    $cost = 0;

    // 각 구간에 대해 소비량이 임계값보다 높으면 그 구간에 해당하는 소비량 계산.
    // 각 구간 소비량에 대한 요금 계산 후 구간값을 뺌.
    if ($power_usage >= 4001) {
        $range_usage = $power_usage - 4000;
        $cost += 3850 * $range_usage;
        $power_usage -= $range_usage;
    }
    if ($power_usage >= 2001) {
        $range_usage = $power_usage - 2000;
        $cost += 1600 * $range_usage;
        $power_usage -= $range_usage;
    }
    if ($power_usage >= 500) {
        $range_usage = $power_usage - 500;
        $cost += 910 * $range_usage;
        $power_usage -= $range_usage;
    }
    if ($power_usage >= 0) {
        $range_usage = $power_usage;
        $cost += 410 * $range_usage;
        $power_usage -= $range_usage;
    }
    
    echo "전력 소비량 $power_usage_ kWh에 대한 지불액은 ".number_format($cost)."원 입니다.";
?>