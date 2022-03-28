<?php
    /* 초등학교 학년에 따른 급식비 계산 프로그램.
     * 1학년: 3만 원
     * 2학년: 3만 5천 원
     * 3학년: 4만 원
     * 4학년: 4만 5천 원
     * 5학년: 5만 원
     * 6학년: 5만 5천 월
     */

    $grade = 5;     // 5학년.

    if ($grade == 1)
        echo "$grade 학년 급식비: 3만 원";
    else if ($grade == 2)
        echo "$grade 학년 급식비: 3만 5천 원";
    else if ($grade == 3)
        echo "$grade 학년 급식비: 4만 원";
    else if ($grade == 4)
        echo "$grade 학년 급식비: 4만 5천 원";
    else if ($grade == 5)
        echo "$grade 학년 급식비: 5만 원";
    else if ($grade == 6)
        echo "$grade 학년 급식비: 5만 5천 원";
    else
        echo "학년이 잘못 입력되었어요!";
?>