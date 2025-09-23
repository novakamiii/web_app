<?php
include "misc/database.php";

$search = isset($_GET['q']) ? mysqli_real_escape_string($conn, $_GET['q']) : '';

$sql = "SELECT id, prod_name, price, stock, info 
            FROM products 
            WHERE prod_name LIKE '%$search%' 
            OR info LIKE '%$search%'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - E-Shop</title>
    <link href="styles.css" rel="stylesheet">

    <style>
        .product-img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">E-Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">🛒 Cart</a></li>
                </ul>

                <!-- Search Form -->
                <form class="d-flex" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" name="search_query" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- SEARCH RESULTS -->
    <div class="container my-5">
        <?php
            $search = $_GET['search_query'];
            echo "<h2 class=\"mb-4\">Search Results for \"{$search}\"</h2>";
        ?>
        <div class="row">
            <?php
                include "misc/search_handler.php";
                if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET["search_query"]) 
                {
                    search();
                }
            ?> 
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2025 E-Shop | Designed for demo purposes</p>
    </footer>

    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>

<?php mysqli_close($conn); ?>