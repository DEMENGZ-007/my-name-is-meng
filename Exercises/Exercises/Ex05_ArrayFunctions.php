<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex05_ArrayFunctions.php</title>
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 5 - Built-in Array Functions
        Use count, array_push, array_pop, in_array, sort and implode on an array of colors.
        */
        $colors = ["Red", "Green", "Blue"];
        echo "Count: " . count($colors) . "<br>";
        array_push($colors, "Yellow", "Pink");
        echo "After push: " . implode(", ", $colors) . "<br>";
        $removed = array_pop($colors);
        echo "Removed: {$removed}<br>";
        echo in_array("Blue", $colors) ? "Blue exists<br>" : "Blue not found<br>";
        sort($colors);
        echo "Sorted: " . implode(", ", $colors) . "<br>";
    ?>
</body>
</html>
