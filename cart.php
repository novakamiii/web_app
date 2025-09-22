<?php
    include "misc/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - E-Shop</title>

    <!-- Bootstrap CSS -->
    <link href="styles.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">E-Shop</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="cart.php">🛒 Cart</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="text-center text-white py-5 bg-dark"
        style="background:url('https://picsum.photos/1200/400?cart') center/cover no-repeat;">
        <div class="container">
            <h1 class="display-4" id="hero-title">Your Shopping Cart</h1>
            <p class="lead" id="hero-subtitle">Review and manage your selected products</p>
        </div>
    </header>

    <!-- CART CONTENT -->
    <section class="py-5">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Row -->
                        <tr>
                            <td>Sample Product</td>
                            <td>$20.00</td>
                            <td>
                                <input type="number" class="form-control w-50 mx-auto" value="1" min="1">
                            </td>
                            <td>$20.00</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Remove</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Cart Summary -->
            <div class="text-end mt-4">
                <h4>Total: $20.00</h4>
                <button class="btn btn-success">Proceed to Checkout</button>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2025 E-Shop | Designed for demo purposes</p>
    </footer>

</body>

</html>

<?php
    mysqli_close($conn);
?>
