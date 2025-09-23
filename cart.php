<?php
include "misc/database.php";
include "misc/cart_handler.php";
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
            <!-- Search Form -->
                <form class="d-flex" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" name="q" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
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
                        <?php
                        showCart();
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Cart Summary -->
            <div class="text-end mt-4">
                <h4 id="cart-total">Total: $0.00</h4>
                <form action="cart.php" method="post">
                    <input type="hidden" name="checkout" value="checkout">
                    <button type="submit" class="btn btn-success" > Proceed to Checkout</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2025 E-Shop | Designed for demo purposes</p>
    </footer>

</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const rows = document.querySelectorAll("table tbody tr");
        const cartTotalEl = document.getElementById("cart-total");

        function updateCartTotal() {
            let totalSum = 0;
            rows.forEach(row => {
                const priceCell = row.querySelector(".price");
                const qtyInput = row.querySelector(".qty");
                const totalCell = row.querySelector(".total");
                const unitPrice = parseFloat(priceCell.dataset.price);

                const qty = parseInt(qtyInput.value) || 1;
                const total = unitPrice * qty;
                totalCell.textContent = `$${total.toFixed(2)}`;

                totalSum += total;
            });

            cartTotalEl.textContent = `Total: $${totalSum.toFixed(2)}`;
        }

        // initial update
        updateCartTotal();

        // update on any quantity change
        rows.forEach(row => {
            const qtyInput = row.querySelector(".qty");
            qtyInput.addEventListener("input", updateCartTotal);
        });
    });
</script>

<?php
mysqli_close($conn);
?>