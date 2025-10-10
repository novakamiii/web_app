<?php
include "misc/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - E-Shop</title>

    
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
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">🛒 Cart</a></li>
                    <li><button id="loginBtn" class="btn btn-outline-light">Login</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="text-center text-white py-5 bg-dark"
        style="background:url('img/banner-contact.png') center/cover no-repeat; height: 350px;">
        <div class="container">
            <h1 class="display-4" id="hero-title">Contact Us</h1>
            <p class="lead" id="hero-subtitle">We’d love to receive feedback from you. Send us a message!</p>
        </div>
    </header>

    <!-- CONTACT FORM -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form class="card p-4 shadow-sm" id="contact">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="messages" id="message" rows="5"
                                placeholder="Type your message here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
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
    <footer class="footer bg-dark text-white text-center py-3">
        <p class="mb-0">© 2025 E-Shop | Designed for demo purposes</p>
    </footer>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="modals.js"></script>

</body>

</html>

<?php
mysqli_close($conn);
?>

