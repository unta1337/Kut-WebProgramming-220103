<!doctype html>
<?php $num_chapters = 2 ?>
<html>
    <head>
        <meta charset="utf-8"></meta>
        <title>PHP</title>
    </head>
    <body>
        <?php for ($i = 1; $i <= $num_chapters; $i++) echo "<a href=\"{$i}/index.php\">{$i}장</a> <br>"; ?>
    </body>
</html>