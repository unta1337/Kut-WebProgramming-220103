<?php
    # 배열의 일부를 출력하는 함수를 이용한 배열 출력.
    function printArray($arr) {
        printArrayRange($arr, 0, count($arr) - 1);
    }

    # 배열의 일부를 출력하는 함수.
    function printArrayRange($arr, $left, $right) {
        echo "[";
        for ($i = $left; $i < $right; $i++)
            echo $arr[$i].", ";
        echo $arr[$right]."]<br>";
    }

    function bubbleSort(&$arr) {
        # $arr의 원소의 개수만큼 정렬해야 하므로 원소의 개수만큼 반복.
        for ($i = 0; $i < count($arr); $i++) {
            # $arr의 첫 번째 요소부터 마지막 요소까지 반복하며 조건 확인.
            for ($j = 0; $j < count($arr) - 1; $j++)        # $j가 count($arr) -1이면 $j + 1에서 참조 오류가 발생하므로 그보다 하나 줄임.
                # 현재 원소가 다음 원소보다 크면 두 원소를 바꿈.
                if ($arr[$j] > $arr[$j + 1])
                    list($arr[$j], $arr[$j + 1]) = [$arr[$j + 1], $arr[$j]];
            printArray($arr);
        }
    }

    $arr = [11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 47, 21];

    echo "Befre: ";
    printArray($arr);

    bubbleSort($arr);

    echo "After: ";
    printArray($arr);
?>