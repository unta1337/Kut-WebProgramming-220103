<!doctype html>
<?php
    $num_examples = 12;
    $num_probs = 5;
?>
<html>
    <head>
        <meta charset="utf-8"></meta>
        <title>3장</title>
    </head>
    <body>
        <?php
            for ($i = 1; $i <= $num_examples; $i++) echo "<a href=\"{$i}.php\">예제: {$i}</a> <br>";
            echo "<br>";
            for ($i = 1; $i <= $num_probs; $i++) echo "<a href=\"prob/{$i}.php\">연습문제: {$i}</a> <br>";
        ?>
    </body>
</html>