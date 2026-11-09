<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex06_PassFailLoop.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 6 - Pass / Fail with foreach
        For each student, add midterm + final. If total >= 50 show Passed, otherwise Failed.
        */
        $students = [
            ["name" => "Dara",   "mid" => 20, "final" => 35],
            ["name" => "Srey",   "mid" => 15, "final" => 20],
            ["name" => "Vuthy",  "mid" => 30, "final" => 40],
            ["name" => "Kunthea","mid" => 10, "final" => 25]
        ];
        foreach ($students as $s) {
            $total = $s["mid"] + $s["final"];
            $status = ($total >= 50) ? "Passed" : "Failed";
            echo "{$s['name']}: {$total} - {$status}<br>";
        }
    ?>
</body>
</html>
