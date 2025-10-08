<?php
include "database.php";


function prodDetails ()
{
    global $conn;
    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    
    $query = "SELECT * FROM products WHERE id = {$id}";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);

    $prodID = $product['id'];
    $prodName = $product['prod_name'];
    $prodImg = $product['img'];
    $prodPrice = number_format($product['price'], 2, '.', '');
    $prodStock = $product['stock'];
    $prodInfo = $product['info'];


    $htmlYes = <<<HTML
        <div class="row">
                <!-- Images -->
                <div class="col-md-6">
                    <img src="img/products/$prodImg.jpg"
                        alt="$prodName"
                        class="product-img-main mb-3">
                </div>

                <!-- Info -->
                <div class="col-md-6">
                    <h1>$prodName</h1>
                    <p class="fs-4 fw-bold text-success">$$prodPrice</p>
                    <p class="text-muted">Stock: $prodStock</p>
                    <p>$prodInfo</p>

                    <div class="d-flex gap-3 mt-3">
                        <a href="cart.php?action=add&id=$prodID"
                            class="btn btn-primary btn-lg">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Reviews -->
            <div class="mt-5">
                <h3>Customer Reviews</h3>
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">⭐⭐⭐⭐⭐</p>
                        <p class="card-text">Excellent quality! Very satisfied with my purchase.</p>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">⭐⭐⭐⭐</p>
                        <p class="card-text">Great value for money. Would recommend!</p>
                    </div>
                </div>
            </div>
    HTML;

    $htmlNo = <<<HTML
        <div class="alert alert-danger text-center">Product not found.</div>
    HTML;

    if ($product)
    {
        return $htmlYes;
    }
    else
    {
        return $htmlNo;
    }
}