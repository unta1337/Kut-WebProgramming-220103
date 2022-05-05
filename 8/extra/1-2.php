<?php
    session_start();

    # 세션이 존재하지 않으면 count를 0으로 초기화.
    if (!isset($_SESSION["count"]))
        $_SESSION["count"] = 0;

    echo "counter 값: ".$_SESSION["count"]
?>