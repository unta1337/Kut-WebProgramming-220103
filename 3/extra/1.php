<?php
    $birth_year = 2001;

    $leap_year = '윤년이 아닙니다.';

    // 연도가 4의 배수이거나 400의 배수이면 윤년.
    if ($birth_year % 4 == 0 or $birth_year % 400 == 0)
        $leap_year = '윤년입니다.';
    // 참고: 최초의 $leap_year가 '윤년이 아닙니다.' 이므로 100에 대한 조건은 검사할 필요가 없음.

    echo "{$birth_year}은 {$leap_year}";
?>