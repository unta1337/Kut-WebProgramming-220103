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

    function selectionSort(&$arr) {
        # $arr의 원소의 개수만큼 정렬해야 하므로 원소의 개수만큼 반복.
        for ($i = 0; $i < count($arr); $i++) {
            $keyIndex = $i;     # 현재 인덱스가 가장 작다고 가정하여 탐색 시작.

            # 현재 인덱스보다 하나 뒤부터 탐색하여 가장 작은 원소 색출.
            for ($j = $i + 1; $j < count($arr); $j++)
                # 현재 지정된 원소보다 작은 원소가 나오면 해당 원소로 인덱스 변경.
                if ($arr[$j] < $arr[$keyIndex])
                    $keyIndex = $j;
            list($arr[$i], $arr[$keyIndex]) = [$arr[$keyIndex], $arr[$i]];      # 정렬할 원소와 가장 작은 원소를 바꿈.

            printArrayRange($arr, 0, $i);
        }
    }

    $arr = [11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 47, 21];

    echo "Befre: ";
    printArray($arr);

    selectionSort($arr);

    echo "After: ";
    printArray($arr);
?>