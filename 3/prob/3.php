<?php
    $score = 90;
    echo "시험 점수: {$score}점<br>";

    if (90 <= $score && $score <= 100)
        echo "등급: 수";
    else if (80 <= $score && $score <= 89)
        echo "등급: 우";
    else if (70 <= $score && $score <= 79)
        echo "등급: 미";
    else if (60 <= $score && $score <= 69)
        echo "등급: 양";
    else if (50 <= $score && $score <= 59)
        echo "등급: 가";
    else
        echo "점수를 잘못 입력하셨습니다!";
?>