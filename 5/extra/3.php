<?php
    # 초기 점수 설정.
    $scores = [
        [28, 28, 26, 9],
        [30, 27, 30, 10],
        [25, 26, 24, 8],
        [18, 22, 22, 5],
        [24, 25, 30, 10]
    ];

    # 평균을 저장할 배열 생성.
    $averages = [0, 0, 0, 0, 0];

    # 점수 출력과 동시에 평균에 점수의 합 계산.
    echo "중간 기말 팀플 출석 총점<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "학생 ${i}번: ";

        $sum = 0;
        for ($j = 0; $j < 4; $j++) {
            # 점수 출력.
            echo $scores[$i - 1][$j]." ";
            # 평균 계산을 위한 누산.
            $averages[$j] += $scores[$i - 1][$j];
            # 총합 계산.
            $sum += $scores[$i - 1][$j];
        }

        # 평균 계산을 위한 누산.
        $averages[$j] += $sum;
        echo "$sum <br>";
    }

    # 평균을 구하기 위해 추가 연산 수행.
    for ($j = 0; $j < 5; $j++)
        $averages[$j] /= 5;

    # 결과 출력.
    echo "과목 별 평균: ";
    for ($j = 0; $j < 5; $j++)
        echo $averages[$j]." ";
?>