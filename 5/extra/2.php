<?php
    # 0부터 20까지를 원소로 갖는 배열 생성.
    $array = array();
    for ($i = 0; $i < 20; $i++)
        array_push($array, $i + 1);
    
    # 배열을 정렬하기 위한 사전 변수 설정.
    $index = 0;
    $odd_index = 0;
    $even_index = 19;

    # 보조 배열을 활용하여 배열 정렬.
    $result = array();
    while ($odd_index <= $even_index) {
        # 원소가 짝수이면 뒤에서부터 삽입.
        if ($array[$index] % 2 == 0)
            $result[$even_index--] = $array[$index++];

        # 원소가 홀수이면 앞에서부터 삽입.
        else
            $result[$odd_index++] = $array[$index++];
    }

    # 결과 출력.
    for ($i = 0; $i < 20; $i++)
        echo "$result[$i] ";
?>