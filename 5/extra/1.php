<?php
    # 사용자 정의 범위 설정.
    $range_max = 113;

    # 소수를 저장할 배열 생성.
    $prime_arr = array();
    $prime_count = 0;

    # 에라토스테네스의 체를 사용하므로 범위 내의 모든 자연수 할당.
    for ($i = 0; $i <= $range_max; $i++)
        array_push($prime_arr, $i);

    # 에라토스테네스의 체 수행.
    for ($i = 2; $i <= $range_max; $i++) {
        # 처음으로 설정된 $i는 제외하지 않고 $i의 배수만을 제외하기 위해 $j를 2로 설정.
        for ($j = 2; $j <= $range_max; $j++) {
            # $i와 $j를 사용하여 인덱스 추출.
            $index = $i * $j;
            # 만약 인덱스가 배열 범위를 넘어서면 더 이상 계산할 필요가 없음.
            if ($index > $range_max)
                break;

            # 소수가 아님을 표시하기 위해 -1 대입.
            $prime_arr[$index] = -1;
        }
    }

    # 소수 출력.
    for ($i = 2; $i <= $range_max; $i++) {
        if ($prime_arr[$i] != -1) {
            echo "{$prime_arr[$i]} ";
            # 소수이면 소수의 개수 증가.
            $prime_count++;
        }
    }

    # 소수 개수 출력.
    echo "<br>Count: $prime_count";
?>