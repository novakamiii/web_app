<?php
include "misc/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - E-Shop</title>

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
                    <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">🛒 Cart</a></li>
                    <li><button id="loginBtn" class="btn btn-outline-light">Login</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="text-center text-white py-5 bg-dark"
        style="background:url('img/banner-about.png') center/cover no-repeat; height:350px">
        <div class="container">
            <h1 class="display-4" id="hero-title">About Arctic</h1>
            <p class="lead" id="hero-subtitle">Learn more about our story, mission, and team</p>
        </div>
    </header>

    <!-- ABOUT SECTION -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">About Us</h2>
            <p class="text-center text-muted mb-5">
                Our E-shop is the one stop shop for all of your needs! Our goal is to provide high-quality products
                that our customers love. We are committed to excellent customer service and making a seamless shopping experience.
            </p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mission</h5>
                            <p class="card-text">To provide high-quality products for our customer base.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Vision</h5>
                            <p class="card-text">To become a leading choice for customers that is based in trustworthiness and quality.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Values</h5>
                            <p class="card-text">We believe in integrity, innovation, and putting our customers first in everything we do.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Meet Our Team</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card h-100 text-center shadow-sm">
                        <img src="https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-1/469444377_3926434597636182_6161249111952600436_n.jpg?stp=c0.92.1536.1536a_dst-jpg_s200x200_tt6&_nc_cat=107&ccb=1-7&_nc_sid=1d2534&_nc_eui2=AeH2uFv901h7oCNIK5vKhXMyKkjZHl6LGVMqSNkeXosZU9D8mRlAeS8GzdzPJFUlvBJMdvZbXd4sZyzlvio_S6o6&_nc_ohc=QOC0BwrVLSQQ7kNvwEu6EG_&_nc_oc=Adm9bvchli6Ld_BFxfk31sV3ej3lJe2kXhp_JSe-Hnki6Epry9PDb9GRdHqu7G5559o&_nc_zt=24&_nc_ht=scontent.fmnl3-1.fna&_nc_gid=v51KkPMoLiRP_zbR1q7Tig&oh=00_AfdZzoCOUGcJyo1xjh9Aj36x0TIEic3M8NhyBaTjrQtI7w&oe=68EE4BC6" class="card-img-top rounded-circle mx-auto mt-3" style="width:120px; height:120px;" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Paulo Neil Sevilla</h5>
                            <p class="card-text">Co-founder</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 text-center shadow-sm">
                        <img src="https://scontent.fmnl37-1.fna.fbcdn.net/v/t39.30808-6/504933616_4108181266122725_3134125291306324547_n.jpg?stp=dst-jpg_s206x206_tt6&_nc_cat=106&ccb=1-7&_nc_sid=fe5ecc&_nc_eui2=AeGpIEtukLceaUIDhAcouY1A5zf8aPoi1CjnN_xo-iLUKBjqHrERdj0Skid0DWzx4WVhXXjExIfnBMmFcEwmGlWn&_nc_ohc=t5xqH05tQOsQ7kNvwH9OVQo&_nc_oc=AdmP7piZTqqVJQSlxJnJ_dixBVOv5NuOd2Jei5pS4DN-02tHDHd_vi7D8r9YLiYEHk8&_nc_zt=23&_nc_ht=scontent.fmnl37-1.fna&_nc_gid=a7C_aHh8JV14jim9rrFAbg&oh=00_Affq4YmhkWUhwDbQuJphLzEKOzLe3ufYWiLavHAuUqZFmw&oe=68EE5F47" class="card-img-top rounded-circle mx-auto mt-3" style="width:120px; height:120px;" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Danzel Bordeos</h5>
                            <p class="card-text">Co-founder</p>
                        </div>
                    </div>
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
</body>

</html>

<?php
mysqli_close($conn);
?>