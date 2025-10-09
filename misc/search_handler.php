<?php
include "database.php";
function search()
{
    global $conn;

    $search = $_GET['search_query'];
    $search = mysqli_real_escape_string($conn, $search);

    $query = "SELECT * FROM products WHERE prod_name LIKE '%$search%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) { 
        echo "<div class=\"row g-4\">";

        while ($row = mysqli_fetch_assoc($result)) {
            $prod_name = $row['prod_name'];
            $price = number_format($row['price'], 2);
            $id = $row['id'];
            $info = $row['info'];
            $stock = $row['stock'];
            $img = $row['img'];

            echo "<div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <!-- Placeholder product image -->
                    <img src=\"img/products/{$img}.jpg\"
                        class=\"card-img-top product-img\"
                        alt=\"{$prod_name}\">

                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\">{$prod_name}</h5>
                        <p class=\"card-text text-truncate\">{$info}</p>
                        <p class=\"fw-bold mt-auto\">\${$price}</p>
                        <p class=\"text-muted\">Stock:{$stock}</p>
                        <a href=\"product.php?id={$id} class=\" btn btn-primary w-100 mt-2\">View Details</a>
                    </div>
                </div>
            </div>";
        }

        echo "</div>";
    } else {
        echo "<h2 class=\"alert alert-warning text-center\">No results found for '{$search}'</h2>";
        echo "<h2>";
    }
}
