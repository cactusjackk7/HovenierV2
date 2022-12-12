<?php
// Connect to the database
$db = mysqli_connect('localhost', 'username', 'password', 'garden_shop');

// Retrieve the products from the database
$query = "SELECT * FROM products";
$result = mysqli_query($db, $query);

// Display the products
while ($product = mysqli_fetch_assoc($result)) {
    echo "<h3>{$product['name']}</h3>";
    echo "<p>Price: {$product['price']}</p>";
    echo "<p>Description: {$product['description']}</p>";
}

// Close the database connection
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Producten</title>
</head>
</html>