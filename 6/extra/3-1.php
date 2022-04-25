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

    # 병합정렬을 위한 함수.
    function mergeSort(&$arr) {
        # 병합정렬 함수의 인자를 배열만 둘 수 있도록 별도의 함수 사용.
        __mergeSortDivide($arr, 0, count($arr) - 1);
    }

    # 실제 병합정렬 함수.
    function __mergeSortDivide(&$arr, $left, $right) {
        # 배열의 길이가 1 이하이면 무시 후 진행. (베이스 케이스)
        if ($left >= $right)
            return;

        # 배열의 중앙 인덱스를 잡아 분할정복 수행.
        $middle = (int) (($left + $right) / 2);
        __mergeSortDivide($arr, $left, $middle);            # 왼쪽부터 중앙까지. (왼쪽 부분 배열)
        __mergeSortDivide($arr, $middle + 1, $right);       # 중앙부터 오른쪽까지. (오른쪽 부분 배열)
        __mergeSortMerge($arr, $left, $right, $middle);     # 양쪽 부분 배열 병합.
    }

    # 부분 배열을 병합하는 함수.
    function __mergeSortMerge(&$arr, $left, $right, $middle) {
        $sorted = [];       # 정렬된 부분 배열을 저장.
        $l = $left;         # 왼쪽 부분 배열의 인덱스.
        $r = $middle + 1;   # 오른쪽 부분 배열의 인덱스.

        # 양쪽 부분 배열의 인덱스가 유효할 동안 반복.
        while ($l <= $middle && $r <= $right) {
            if ($arr[$l] < $arr[$r])        # 왼쪽 부분 배열의 요소가 작으면 이를 정렬된 배열에 삽입.
                array_push($sorted, $arr[$l++]);
            else                            # 오른쪽 부분 배열의 요소가 작으면 이를 정렬된 배열에 삽입.
                array_push($sorted, $arr[$r++]);
        }

        # 아직 삽입되지 않은 원소들을 정렬된 배열에 일괄 삽입.
        if ($l > $middle) {
            while ($r <= $right)
                array_push($sorted, $arr[$r++]);
        } else {
            while ($l <= $middle)
                array_push($sorted, $arr[$l++]);
        }

        printArrayRange($arr, $left, $middle);
        printArrayRange($arr, $middle + 1, $right);
        printArray($sorted);

        # 정렬된 배열인 보조 배열의 원소들을 주 배열로 복사.
        $index = 0;
        for ($i = $left; $i <= $right; $i++)
            $arr[$i] = $sorted[$index++];
    }

    $arr = [11, 23, 5, 71, 90, 151, 133, 15, 19, 9, 25, 26, 24, 14, 52, 30, 82, 65, 21];

    echo "Befre: ";
    printArray($arr);

    mergeSort($arr);

    echo "After: ";
    printArray($arr);
?>