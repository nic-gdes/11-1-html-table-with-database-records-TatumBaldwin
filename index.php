<?php 
// Link database to page
include('./assets/config/db.php');

// Select the name and price from database
$sql = "SELECT name, price FROM items";

// Query the DB and add results to a php array
$result = mysqli_query($conn, $sql);
$items = mysqli_fetch_all( $result, MYSQLI_ASSOC);

// Free the results from memory, close SQL connection
                // mysqli_free_result($result);
                // mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
    
    <section class="product-table">

                <table>
                    <h1>Our Products</h1>
                    <thead>
                        <th>Product Name</th>
                        <th>Price</th>
                    </thead>
                    <?php foreach($items as $item) : ?>
                    <tbody>
                        <tr>
                            <td><?php echo $item["name"]; ?></td>
                            <td><?php echo $item["price"]; ?></td>
                        </tr>
                    </tbody>

                <?php endforeach ?>
                
        </section>
</body>
</html>