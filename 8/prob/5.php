<?php
    if (isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
        $userid = $_COOKIE["userid"];
        $username = $_COOKIE["username"];

        echo "userid 쿠키 : " . $_COOKIE . "<br>";
        echo "username 쿠키 : " . $_COOKIE . "<br>";
    } else {
        echo "쿠키가 생성되지 않았다!";
    }
?>