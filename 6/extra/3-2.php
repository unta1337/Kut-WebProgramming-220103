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
        if ($i <= $right)
            echo $arr[$right];
        echo "]";
    }

    # 퀵정렬을 위한 함수.
    function quickSort(&$arr) {
        # 퀵정렬 함수의 인자를 배열만 둘 수 있도록 별도의 함수 사용.
        __quickSort($arr, 0, count($arr) - 1);
    }

    # 실제 퀵정렬 함수.
    function __quickSort(&$arr, $left, $right) {
        # 배열의 길이가 1 이하이면 무시 후 진행. (베이스 케이스)
        if ($left >= $right)
            return;

        # 배열에서 피벗의 인덱스를 추출하여 분할정복 수행.
        $pivotIndex = __quickSortPartition($arr, $left, $right);
        __quickSort($arr, $left, $pivotIndex - 1);      # 왼쪽부터 피벗까지. (왼쪽 부분 배열)
        __quickSort($arr, $pivotIndex + 1, $right);     # 비벗부터 오른쪽까지. (오른쪽 부분 배열)
    }

    # 비벗의 인덱스를 추출하는 함수.
    function __quickSortPartition(&$arr, $left, $right) {
        $pivotValue = $arr[$left];      # 최좌단 원소를 항상 피벗으로 채택.
        $l = $left + 1;                 # 왼쪽 부분 배열 포인터.
        $r = $right;                    # 오른쪽 부분 배열 포인터.

        # 두 포인터가 엇갈리기 전까지 반복.
        while ($l <= $r) {
            while ($l <= $r && $arr[$l] <= $pivotValue) $l++;   # 왼쪽 포인터는 원소가 피벗의 값보다 작으면 증가.
            while ($l <= $r && $arr[$r] >= $pivotValue) $r--;   # 오른쪽 포인터는 원소가 피벗의 값보다 크면 증가.

            # 포인터 증감을 마친 후 아직 유효한 포인터인 경우 두 원소를 바꿈.
            if ($l <= $r)
                list($arr[$l], $arr[$r]) = [$arr[$r], $arr[$l]];
        }

        # 피벗으로 지정했던 원소를 올바른 위치로 이동.
        list($arr[$left], $arr[$r]) = [$arr[$r], $arr[$left]];

        printArrayRange($arr, $left, $r - 1);
        printArrayRange($arr, $r, $r);
        printArrayRange($arr, $r + 1, $right);
        echo "<br>";

        # 이동된 피벗의 인덱스 반환.
        return $r;
    }

    $arr = [11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 21];

    echo "Befre: ";
    printArray($arr);
    echo "<br>";

    quickSort($arr);

    echo "After: ";
    printArray($arr);
?>