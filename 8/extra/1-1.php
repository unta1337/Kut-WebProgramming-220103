<html>
    <body>
        <form name="form" method="post">
            <input type="submit" name="increase" value="+1 Button">
            <input type="submit" name="reset" value="Reset">
        </form>
        <?php
            session_start();

            # 세션이 없거나 reset 버튼을 누르면 count 초기화.
            if (!isset($_SESSION["count"]) || isset($_POST["reset"]))
                $_SESSION["count"] = 0;

            # 세션이 존재하면 숫자 증가.
            if (isset($_POST["increase"]))
                $_SESSION["count"]++;

            echo $_SESSION["count"]
        ?>
    </body>
</html>