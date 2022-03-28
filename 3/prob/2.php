<?php
    $month = 12;

    if (3 <= $month && $month <= 5) {
        $season = '봄';
        echo "{$month}월은 {$season}입니다.";
    } else if (6 <= $month && $month <= 8) {
        $season = '여름';
        echo "{$month}월은 {$season}입니다.";
    } else if (9 <= $month && $month <= 11) {
        $season = '가을';
        echo "{$month}월은 {$season}입니다.";
    } else if ($month == 12 || $month == 1 || $month == 2) {
        $season = '겨울';
        echo "{$month}월은 {$season}입니다.";
    } else {
        echo "잘못 입력되었습니다!";
    }
?>