<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex11_GradeFunction.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 11 - Grade function
        Create a function grade($average) that returns A (>=80), B (>=65), C (>=50) or F. Use it on an array of averages.
        */
        function grade($average) {
            if ($average >= 80) return "A";
            if ($average >= 65) return "B";
            if ($average >= 50) return "C";
            return "F";
        }
        $averages = [92, 70, 55, 30];
        foreach ($averages as $avg) {
            echo "Average {$avg} = Grade " . grade($avg) . "<br>";
        }
    ?>
</body>
</html>
