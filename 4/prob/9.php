<?php
    echo "--------------------<br>";
    echo "제곱미터 평<br>";
    echo "--------------------<br>";

    for ($msq = 10; $msq <= 300; $msq += 10) {
        $pyeong = $msq * 0.3025;
        echo "$msq $pyeong<br>";
    }
    echo "--------------------<br>";
?>