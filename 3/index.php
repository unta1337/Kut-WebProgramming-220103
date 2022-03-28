<!doctype html>
<?php $num_examples = 12 ?>
<html>
    <head>
        <meta charset="utf-8"></meta>
        <title>3장</title>
    </head>
    <body>
        <?php for ($i = 1; $i <= $num_examples; $i++) echo "<a href=\"{$i}.php\">예제: {$i}</a> <br>"; ?>
    </body>
</html>