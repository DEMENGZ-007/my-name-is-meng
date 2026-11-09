<?php require_once('import/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex12 Include</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 12 - Include external files
        Put functions in import/functions.php, header in import/header.php and footer in import/footer.php.
        Import them and show total, average and result of a score list.
        */
        include('import/header.php');
        $scores = [80, 65, 90, 45];
        echo "Total: " . totalScore($scores) . "<br>";
        echo "Average: " . averageScore($scores) . "<br>";
        echo "Result: " . result(averageScore($scores)) . "<br>";
        include('import/footer.php');
    ?>
</body>
</html>
