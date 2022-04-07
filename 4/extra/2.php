<?php
    $num = 8;
    $result = "{$num}은 소수";

    if ($num <= 1)
        $result .= "가 아닙니다.";
    else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $result .= "가 아닙니다.";
                break;
            }
        }

        if ($i == $num)
            $result .= "입니다.";
    }

    echo $result;
?>