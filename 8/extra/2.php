<html>
    <body>
        숫자를 입력하시오. (양수)
        <form name="form" method="post">
            <input type="number" name="num">
            <input type="submit" value="확인">
        </form>
        <?php
            session_start();

            # 세션 초기화.
            if (!isset($_SESSION["tryCount"])) {
                $_SESSION["tryCount"] = 0;
                $_SESSION["target"] = rand(0, 100);     # 난수를 생성하며 게임 진행.
            }

            # 세션이 있으면 게임 실행.
            if (isset($_POST["num"])) {
                $guess = $_POST["num"];

                # 입력이 숫자가 아니면 경고 표시.
                if (!is_numeric($guess)) {
                    echo "숫자가 아닙니다. 숫자를 입력해주세요.";
                    return;
                }

                echo "시도 횟수: ".$_SESSION["tryCount"]."<br>";

                # 최대 시도 횟수 처리.
                if ($_SESSION["tryCount"] >= 5) {
                    echo "최대 시도 횟수가 초과했습니다!";
                    session_unset();
                    return;
                }

                # 게임 로직.
                if ($guess < $_SESSION["target"]) {
                    echo "당신이 입력한 숫자 ".$guess."보다 Up!";
                } else if ($guess > $_SESSION["target"]) {
                    echo "당신이 입력한 숫자 ".$guess."보다 Down!";
                } else {
                    echo "당신이 입력한 숫자 ".$guess."은 정답입니다!";
                    session_unset();
                }

                $_SESSION["tryCount"]++;
            } else {
                echo "시도 횟수: ".$_SESSION["tryCount"]."<br>";
            }
        ?>
    </body>
</html>