<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="pulauStyle.css">
    <!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<body>
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand"><span>Culture</span>Way</a>

            <!-- Toggler for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="destination.php">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artCulture.php">Art and Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">About Us</a>
                    </li>
                    <!-- Tombol Login -->
                    <li class="nav-item">
                        <a class="nav-link login-btn" href="#">Join Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Link to external JavaScript file -->
    <script src="homeNavbar.js"></script>

    <section class="hero-section hero-maluku">
        <div class="hero-content">
            <h1>Eksplorasi Pulau Maluku</h1>
            <p>Temukan keajaiban budaya, sejarah, dan keindahan alam dari destinasi terbaik di Pulau Maluku.</p>
        </div>
    </section>

    <section class="destination-section">
        <div class="destination-card">
            <img src="/CultureWay/Image/Maluku Benteng Nassau.jpg" alt="Benteng Nassau">
            <h3>Benteng Nassau</h3>
            <p>Situs bersejarah peninggalan Belanda yang berada di Pulau Banda.</p>
            <a href="#" class="visit-btn">Kunjungi</a>
        </div>
        <div class="destination-card">
            <img src="/CultureWay/Image/Maluku Benteng Belgica.jpg" alt="Benteng Belgica">
            <h3>Benteng Belgica</h3>
            <p>Bangunan pertahanan megah di Banda Neira yang dikenal sebagai "Gibraltar of the East.</p>
            <a href="#" class="visit-btn">Kunjungi</a>
        </div>
        <div class="destination-card">
            <img src="/CultureWay/Image/Maluku Museum Mini Gong Neira.jpg" alt="Museum Mini Gong Neira">
            <h3>Museum Mini Gong Neira</h3>
            <p>Museum kecil yang menyimpan artefak sejarah Banda Neira.</p>
            <a href="#" class="visit-btn">Kunjungi</a>
        </div>
        <div class="destination-card">
            <img src="/CultureWay/Image/Maluku Masjid Tua Wapauwe.jpeg" alt="Masjid Tua Wapauwe">
            <h3>Masjid Tua Wapauwe</h3>
            <p>Masjid tertua di Maluku yang dibangun tanpa paku dengan nilai sejarah tinggi.</p>
            <a href="#" class="visit-btn">Kunjungi</a>
        </div>
    </section>
    
    <!-- footer -->
    <footer>
        <div class="footer-container">
            <!-- Social Media Section -->
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="https://x.com" target="_blank">
                        <img src="/CultureWay/Image/x.png" alt="X" width="40">
                    </a>
                    <a href="https://instagram.com" target="_blank">
                        <img src="/CultureWay/Image/instagram.png" alt="Instagram" width="40">
                    </a>
                    <a href="https://linkedin.com" target="_blank">
                        <img src="/CultureWay/Image/linkedin.png" alt="LinkedIn" width="40">
                    </a>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="footer-section">
                <h3>Contact Information</h3>
                <p><strong>Email:</strong> cultureway@gmail.com</p>
                <p><strong>Phone:</strong> +62 812 3456 7890</p>
                <p><strong>Address:</strong> Jl. Kebudayaan No.10, Jakarta, Indonesia</p>
            </div>

            <!-- Feedback/Suggestions Form -->
            <div class="footer-section">
                <h3>We'd Love to Hear From You</h3>
                <form action="submit_saran.php" method="post">
                    <textarea name="saran" rows="4" cols="50" placeholder="Masukkan saran..."></textarea>
                    <br><br>
                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 CultureWay | All Rights Reserved</p>
        </div>
    </footer>
    <!-- footer end -->
</body>
</html>