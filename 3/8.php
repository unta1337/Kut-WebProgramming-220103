<?php
    $age = 68;
    
    $welfare = 'no';    // 복지 카드 소지 여부.
    $youkong = 'yes';   // 국가유공자 여부.
    $after = 'no';      // yes: 17시 이후 입장, no: 17시 이전 입장.

    // 무료.
    if ($age < 3)
        $fee = '무료';
    
    // 특별 할인.
    else if ($age <= 3 && $age <= 13 || $after == 'yes')
        $fee = '4,000원';

    // 할인.
    else if ($age <= 14 && $age <= 18 || $after == 'yes' || $age >= 70 || $welfare == 'yes' || $youkong == 'yes')
        $fee = '8,000원';

    // 일반 요금.
    else
        $fee = '10,000원';

    echo "복지 카드 소지: $welfare<br>";
    echo "국가유공자증 소지: $youkong<br>";
    echo "17시 이후 입장: $after<br>";
    echo "나이: $age 세<br><br>";
    echo "입장료: $fee";
?>