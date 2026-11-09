<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex08_DefaultParameter.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 8 - Default parameter
        Create a function welcome($name = "Guest", $role = "Visitor"). Call it with 2, 1 and 0 arguments.
        */
        function welcome(string $name = "Guest", string $role = "Visitor"): void {
            echo "Welcome {$name} ({$role})<br>";
        }
        welcome("Sokha", "Student");
        welcome("Dara");
        welcome();
    ?>
</body>
</html>
