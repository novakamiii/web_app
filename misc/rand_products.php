<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Shop - Bootstrap</title>

    <!-- Bootstrap CSS (comment out to see plain HTML) -->
    <link href="styles.css" rel="stylesheet">
</head>
</html>

<?php
include "database.php";
include "cart_handler.php";

$sql1 = "SELECT COUNT(*) as total from products";
$result = mysqli_query($conn, $sql1);

$row = mysqli_fetch_assoc($result);
$total_amount_products = $row['total'];

#echo "Product amount: {$total_amount_products} <br>";

#SHOWS ONLY THREE PRODUCTS
function featuredPage()
{
    global $conn;
    $query = "SELECT * FROM products ORDER BY RAND() LIMIT 3";
    $result = mysqli_query($conn, $query);

    echo "<div class=\"container\">";
    echo "<h2 class=\"text-center mb-4\">Featured Products</h2>";
    echo "<div class=\"row g-4\">";

    while ($row = mysqli_fetch_assoc($result)) {
        $prod_name = $row['prod_name'];
        $price = $row['price'];
        $id = $row['id'];
        $link = "https://picsum.photos/300/200?product" . $id;

        echo "<div class=\"col-md-4\">";
        echo "<div class=\"card h-100\">
                <img src=\"{$link}\" class=\"card-img-top\" alt=\"Product\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$prod_name}</h5>
                    <p class=\"card-text\">{$price}.00</p>
                    <form action=\"index.php\" method=\"post\">
                        <input type=\"hidden\" name=\"prod_name\" value=\"{$prod_name}\">
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Add to Cart</button>
                    </form>
                </div>
              </div>";
        echo "</div>";
    }

    echo "</div></div>";
}

#ALL PRODUCTS
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
            $price = $row['price'];
            $prod_name = $row['prod_name'];

            echo "<div class=\"col-md-4\">
                <div class=\"card h-100\">
                    <img src=\"{$link}\" class=\"card-img-top\" alt=\"Product {$id}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\" name=\"{$prod_name}\">{$prod_name}</h5>
                        <p class=\"card-text\">\${$price}.00</p>
                        <form action=\"products.php\" method=\"post\">
                            <input type=\"hidden\" name=\"prod_name\" value=\"{$prod_name}\">
                            <button type=\"submit\" class=\"btn btn-primary w-100\">Add to Cart</button>
                        </form>
                    </div>
                </div>
              </div>";
        }
    }
    echo "</div>";
}
?>