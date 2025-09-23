<?php
    include "misc/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - E-Shop</title>

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
                    <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">🛒 Cart</a></li>
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
        style="background:url('https://picsum.photos/1200/400?office') center/cover no-repeat;">
        <div class="container">
            <h1 class="display-4" id="hero-title">About E-Shop</h1>
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
                        <img src="https://scontent.fmnl3-1.fna.fbcdn.net/v/t39.30808-1/469444377_3926434597636182_6161249111952600436_n.jpg?stp=c0.92.1536.1536a_dst-jpg_s200x200_tt6&_nc_cat=107&ccb=1-7&_nc_sid=1d2534&_nc_eui2=AeFkc4ODHzBXbAFMSRMxkOuVKkjZHl6LGVMqSNkeXosZU7k6ObRp7_WgTHIdtGxUZQt9HxL8QL_YckMWl8Hd9K-Q&_nc_ohc=KtArRBCRjlsQ7kNvwEqB16S&_nc_oc=AdkPoYyD2Me-Q_D_msnNCUT52qrmqU_OwJjepzlFEzxr1qCXCvgrjsEkxFiYsA22Zjo&_nc_zt=24&_nc_ht=scontent.fmnl3-1.fna&_nc_gid=9t5FrETYrM7Xww0vwoad2A&oh=00_Afbwz1mqZlINQPN3ILo5hbr9syTGguRN8MKYxLaPDeNhEg&oe=68D690C6" class="card-img-top rounded-circle mx-auto mt-3" style="width:120px; height:120px;" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Paulo Neil Sevilla</h5>
                            <p class="card-text">Co-founder</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 text-center shadow-sm">
                        <img src="https://scontent.fmnl34-1.fna.fbcdn.net/v/t39.30808-6/504933616_4108181266122725_3134125291306324547_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHIBL8CtOAi9dVgCQtB9x7P5zf8aPoi1CjnN_xo-iLUKAFQrCyxjt0BLzg5WHUa3SyfcYJit5qhnUsvCuCHGem3&_nc_ohc=hPBsUN0HiiUQ7kNvwExIT9k&_nc_oc=AdlSccF0AQqfKvFs9817aPOOdgta2Ws8O6TRYp4YxABjZudjs_mPirvDLCqVJzHmn0MYQTiYVh7ztmK8OKqJxpD9&_nc_zt=23&_nc_ht=scontent.fmnl34-1.fna&_nc_gid=pMv9Babvci4qn64-1XMROg&oh=00_Afbvcn2asOdeZRlG7y4S9kJemQhSs4onoQgdtjtpdoM5Mg&oe=68D6A447" class="card-img-top rounded-circle mx-auto mt-3" style="width:120px; height:120px;" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Danzel Bordeos</h5>
                            <p class="card-text">Co-founder</p>
                        </div>
                    </div>
                </div>
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
