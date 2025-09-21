<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop - Bootstrap</title>

    <!-- Bootstrap CSS (comment out to see plain HTML) -->
    <link href="styles.css" rel="stylesheet">
</head>

<body>

</body>

</html>

<?php
include "database.php";

$sql1 = "SELECT COUNT(*) as total from products";
$result = mysqli_query($conn, $sql1);

$row = mysqli_fetch_assoc($result);
$total_amount_products = $row['total'];

#echo "Product amount: {$total_amount_products} <br>";

#SHOWS ONLY THREE PRODUCTS
function featuredPage()
{
    global $total_amount_products, $conn;
    $prod_range = range(1, $total_amount_products);
    $randkeys = array_rand($prod_range, 3);

    echo "<div class=\"container\">";
    echo "<h2 class=\"text-center mb-4\">Featured Products</h2>";
    echo "<div class=\"row g-4\">";
    foreach ($randkeys as $key) {
        $rng = $prod_range[$key];
        $query = "SELECT * FROM products WHERE id = {$rng}";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $link = "https://picsum.photos/300/200?product" . $rng;
        if ($row) {
            $price = $row['stock'];
            $prod_name = $row['prod_name'];

            echo "<div class=\"col-md-4\">";
            echo "<div class=\"card h-100\">
                            <img src=\"{$link}\" class=\"card-img-top\" alt=\"Product 1\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{$prod_name}</h5>
                                <p class=\"card-text\">{$price}.00</p>
                                <a href=\"#\" class=\"btn btn-primary w-100\">Add to Cart</a>
                            </div>
                        </div>";
            echo "</div>";
        }
    }
    echo "</div>";
    echo "</div>";
}

function allProducts()
{
    global $total_amount_products, $conn;

    echo "<div class=\"row g-4\">";
    for ($i = 1; $i <= $total_amount_products; $i++) {
        $query = "SELECT * FROM products WHERE id = {$i}";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $link = "https://picsum.photos/300/200?product" . $i;

        if ($row) {
            $id = $row['id'];
            $price = $row['stock'];
            $prod_name = $row['prod_name'];

            echo "<div class=\"col-md-4\">
                <div class=\"card h-100\">
                    <img src=\"{$link}\" class=\"card-img-top\" alt=\"Product {$id}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{$prod_name}</h5>
                        <p class=\"card-text\">\${$price}.00</p>
                        <a href=\"#\" class=\"btn btn-primary w-100\">Add to Cart</a>
                    </div>
                </div>
              </div>";
        }
    }
    echo "</div>";
}
?>