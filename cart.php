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

    <!-- Bootstrap -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

  <!-- Your custom styles -->
  <link rel="stylesheet" href="styles.css">

  <!-- jQuery & Validation (local) -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

  <!-- Your custom modal script -->
  <script src="modals.js"></script>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/artic.png" alt="Logo" width="30" class="d-inline-block align-text-top" id="logoimg">
                Arctic
            </a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search Form -->
                <form class="d-flex" action="search.php" method="GET">
                    <input class="form-control me-2" type="search" name="search_query" placeholder="Search products..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="cart.php">🛒 Cart</a></li>
                    <li><button id="loginBtn" class="btn btn-outline-light">Login</button></li>
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
                        <tr class="cart">
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
                <?php
                    if (getCartCount() != 0)
                    {
                        showCartTotal();
                    } 
                ?>
        </div>
    </section>

    <!-- LOGIN MODAL -->
  <div id="loginModal" class="modal-overlay">
    <div class="modal-box">
      <h2>Login</h2>
      <form id="loginForm">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
      <p style="margin-top:10px;">No account yet? <a href="#" id="openSignup">Sign up here</a></p>
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
      <p style="margin-top:10px;"><a href="#" id="backToLogin">Back to Login</a></p>
    </div>
  </div>

    <!-- FOOTER -->
    <footer class="footer fixed-bottom bg-dark text-white text-center py-3">
        <p class="mb-0">© 2025 E-Shop | Designed for demo purposes</p>
    </footer>
    <script src="bootstrap.bundle.min.js"></script>

</body>

</html>


<!--Vanilla JS -->
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