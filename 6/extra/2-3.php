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

    function insertionSort(&$arr) {
        # $arr의 원소의 개수만큼 정렬해야 하므로 원소의 개수만큼 반복.
        for ($i = 0; $i < count($arr); $i++) {
            $key = $arr[$i];    # 현재 정렬할 대상인 원소를 $key에 저장하여 비교 연산 수행.

            # 정렬할 원소보다 인덱스가 앞선 원소에 대해 반복 수행.
            $j = $i - 1;
            while ($j >= 0 && $arr[$j] > $key)      # 앞선 원소가 정렬할 원소보다 작을 때까지 반복.
                $arr[$j + 1] = $arr[$j--];          # 정렬할 원소의 자리를 찾을 때까지 앞선 원소를 뒤로 밂.
            $arr[$j + 1] = $key;                    # 정렬할 원소를 알맞은 자이에 삽입.

            printArrayRange($arr, 0, $i);
        }
    }

    $arr = [11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 47, 21];

    echo "Befre: ";
    printArray($arr);

    insertionSort($arr);

    echo "After: ";
    printArray($arr);
?>