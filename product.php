<?php
include "misc/database.php";

// Get product ID
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Fetch product
$sql = "SELECT id, prod_name, price, stock, info FROM products WHERE id = $id LIMIT 1";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['prod_name']); ?> - E-Shop</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Your custom styles -->
    <link rel="stylesheet" href="styles.css">

    <!-- jQuery & Validation (local) -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- Your custom modal script -->
    <script src="modals.js"></script>
    <style>
        .product-img-main {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .product-thumb {
            height: 100px;
            object-fit: cover;
            cursor: pointer;
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
            <!-- Search Form -->
                <form class="d-flex" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" name="search_query" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">🛒 Cart</a></li>
                    <li><button id="loginBtn" class="btn btn-outline-light">Login</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- PRODUCT DETAIL -->
    <div class="container my-5">
        <?php if ($product): ?>
            <div class="row">
                <!-- Images -->
                <div class="col-md-6">
                    <img src="https://picsum.photos/600/400?random=<?php echo $product['id']; ?>"
                        alt="<?php echo htmlspecialchars($product['prod_name']); ?>"
                        class="product-img-main mb-3">

                    <!-- Thumbnail previews -->
                    <div class="d-flex gap-2">
                        <img src="https://picsum.photos/200/100?random=<?php echo $product['id'] + 1; ?>" class="product-thumb">
                        <img src="https://picsum.photos/200/100?random=<?php echo $product['id'] + 2; ?>" class="product-thumb">
                        <img src="https://picsum.photos/200/100?random=<?php echo $product['id'] + 3; ?>" class="product-thumb">
                    </div>
                </div>

                <!-- Info -->
                <div class="col-md-6">
                    <h1><?php echo htmlspecialchars($product['prod_name']); ?></h1>
                    <p class="fs-4 fw-bold text-success">$<?php echo number_format($product['price'], 2); ?></p>
                    <p class="text-muted">Stock: <?php echo $product['stock']; ?></p>
                    <p><?php echo nl2br(htmlspecialchars($product['info'])); ?></p>

                    <div class="d-flex gap-3 mt-3">
                        <a href="cart.php?action=add&id=<?php echo $product['id']; ?>"
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
        <?php else: ?>
            <div class="alert alert-danger text-center">Product not found.</div>
        <?php endif; ?>
    </div>
    <!-- LOGIN MODAL -->
    <div id="loginModal" class="modal-overlay">
    <div class="modal-box">
        <h2>Login</h2>
        <form id="loginForm">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        </form>
        <p>No account yet? <a href="#" id="openSignup">Sign up here</a></p>
    </div>
    </div>

    <!-- SIGNUP MODAL -->
    <div id="signupModal" class="modal-overlay">
    <div class="modal-box">
        <h2>Sign Up</h2>
        <form id="signupForm">
        <input type="text" id="username" name="username" placeholder="Username" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="password" id="retypePassword" name="retypePassword" placeholder="Retype Password" required>
        <button type="submit">Create Account</button>
        </form>
        <p><a href="#" id="backToLogin">Back to Login</a></p>
    </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2025 E-Shop | Designed for demo purposes</p>
    </footer>

</body>

</html>

<?php mysqli_close($conn); ?>