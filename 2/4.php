<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"></meta>
    </head>
    <body>
        <h3>
            <?php
                echo "고양이와 토끼";
            ?>
        </h3>
        <?php
            $filename = "../../img/cat.png";
            echo "<img src=\"$filename\">";
            echo "<br>";

            $filename = "../../img/rabbit.png";
            echo "<img src=\"$filename\">";
        ?>
    </body>
</html>