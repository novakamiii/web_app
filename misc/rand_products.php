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
        $price = number_format($row['price'], 2);
        $id = $row['id'];
        $info = $row['info'];
        $stock = $row['stock'];
        $img = $row['img'];

        echo "<div class=\"col-md-4 mb-4\">
                <div class=\"card h-100 shadow-sm\">
                    <!-- Placeholder product image -->
                    <img src=\"img/products/{$img}.jpg\"
                        class=\"img-zoom-limit\"
                        alt=\"{$prod_name}\">

                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"fw-bold fs-3\">{$prod_name}</h5>
                        <p class=\"fs-5 text-truncate\">{$info}</p>
                        <p class=\"fw-bold fs-5\">\${$price}</p>
                        <p class=\"text-muted fs-6\">Stock:{$stock}</p>
                        <a href=\"product.php?id={$id}\" class=\" btn btn-primary w-100 mt-2\">View Details</a>
                    </div>
                </div>
            </div>";
    }

    echo "</div></div>";
}

#ALL PRODUCTS
function allProducts()
{
    global $total_amount_products, $conn;

    echo "<div class=\"container\">";
    echo "<h2 class=\"text-center mb-4\">Featured Products</h2>";
    echo "<div class=\"row g-4\">";

    for ($i = 1; $i <= $total_amount_products; $i++) {
        $query = "SELECT * FROM products WHERE id = {$i}";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $id = $row['id'];
            $price = number_format($row['price'], 2);
            $prod_name = $row['prod_name'];
            $info = $row['info'];
            $stock = $row['stock'];
            $img = $row['img'];


            $html = <<<HTML
                <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <!-- Placeholder product image -->
                    <img src="img/products/{$img}.jpg"
                        class="img-zoom-limit"
                        alt="{$prod_name}">

                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold fs-3">{$prod_name}</h5>
                        <p class="fs-5 text-truncate">{$info}</p>
                        <p class="fw-bold fs-5">\${$price}</p>
                        <p class="text-muted fs-6">Stock:{$stock}</p>
                        <a href="product.php?id={$id}" class=" btn btn-primary w-100 mt-2">View Details</a>
                    </div>
                </div>
            </div>
            HTML;

            // echo "<div class=\"col-md-4 mb-4\">
            //     <div class=\"card h-100\">
            //         <!-- Placeholder product image -->
            //         <img src=\"img/products/{$img}.jpg\"
            //             class=\"card-img-top product-img\"
            //             alt=\"{$prod_name}\">

            //         <div class=\"card-body d-flex flex-column\">
            //             <h5 class=\"card-title\">{$prod_name}</h5>
            //             <p class=\"card-text text-truncate\">{$info}</p>
            //             <p class=\"fw-bold mt-auto\">\${$price}</p>
            //             <p class=\"text-muted\">Stock:{$stock}</p>
            //             <a href=\"product.php?id={$id}\"class=\" btn btn-primary w-100 mt-2\">View Details</a>
            //         </div>
            //     </div>
            // </div>";

            echo $html;
        }
    }
    echo "</div></div>";
}
?>