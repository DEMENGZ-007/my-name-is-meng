<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex04_MultiArrayTable.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        /*
        TASK:
        Exercise 4 - Multidimensional Array Table
        Create 5 products (id, name, price, qty). Show them in a table with a Total column (price x qty) and a grand total.
        */
        $products = [
            ["id" => 1, "name" => "Notebook", "price" => 1.50, "qty" => 10],
            ["id" => 2, "name" => "Pen",      "price" => 0.50, "qty" => 30],
            ["id" => 3, "name" => "Ruler",    "price" => 0.80, "qty" => 12],
            ["id" => 4, "name" => "Bag",      "price" => 15.00, "qty" => 2],
            ["id" => 5, "name" => "Marker",   "price" => 1.20, "qty" => 8]
        ];
        $grand = 0;
    ?>
    <div class="container mt-4">
    <table class="table table-bordered">
        <tr><th>ID</th><th>Name</th><th>Price</th><th>Qty</th><th>Total</th></tr>
        <?php foreach ($products as $p) {
            $total = $p["price"] * $p["qty"];
            $grand += $total; ?>
            <tr>
                <td><?= $p["id"]; ?></td>
                <td><?= $p["name"]; ?></td>
                <td>$<?= number_format($p["price"], 2); ?></td>
                <td><?= $p["qty"]; ?></td>
                <td>$<?= number_format($total, 2); ?></td>
            </tr>
        <?php } ?>
        <tr><th colspan="4">Grand Total</th><th>$<?= number_format($grand, 2); ?></th></tr>
    </table>
    </div>
    <?php
    ?>
</body>
</html>
