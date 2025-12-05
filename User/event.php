<?php
session_start();
// Cek login
if (!isset($_SESSION['registrasi'])) {
    header('location:login.php');
}

// Cek apakah pengguna login
$isLoggedIn = isset($_SESSION['registrasi']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="event.css">
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
                    
                    <!-- Tombol Login Logout -->
                    <?php if ($isLoggedIn): ?>
                        <li class="nav-item"><a class="nav-link logout-btn" href="logout.php" title="Log Out">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link login-btn" href="login.php" title="Log In">Join Us</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!--Link to external JavaScript file -->
    <script src="homeNavbar.js"></script>

   <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
        <h1>Eksplorasi Event Nusantara</h1>
        <p>Saksikan pesona budaya dan seni Indonesia melalui beragam event istimewa</p>
        </div>
    </section>
  
    <section class="event-section">
        <div class="container">
            <!-- Event Terdekat -->
            <div class="event-category">
                <h2>Event Terdekat</h2>
                <div class="event-boxes">
                    <!-- Box Event 1 -->
                    <div class="event-box">
                        <img src="/CultureWay/Image/Poster 1.png" alt="Festival Pesona Barat Selatan">
                        <h3 class="event-title">Festival Pesona Barat Selatan</h3>
                        <div class="event-info">
                            <h4 class="event-date">Tanggal: 15 Februari 2024</h4>
                            <h4 class="event-location">Lokasi: Banda Aceh</h4>
                        </div>
                        <p class="event-description">Rayakan pesona budaya dan tradisi unik dari wilayah barat selatan Indonesia.</p>
                    </div>
                    
                    <div class="event-box">
                        <img src="/CultureWay/Image/Poster 2.png" alt="Festival Budaya Nusantara">
                        <h3 class="event-title">Festival Budaya Nusantara</h3>
                        <div class="event-info">
                            <h4 class="event-date">Tanggal: 20 Maret 2024</h4>
                            <h4 class="event-location">Lokasi: Banyuwangi</h4>
                        </div>
                        <p class="event-description">Saksikan keberagaman budaya Nusantara melalui tari, musik, dan kuliner khas.</p>
                    </div>
                    
                    <div class="event-box">
                        <img src="/CultureWay/Image/Poster 3.png" alt="Festival Budaya Bahari">
                        <h3 class="event-title">Festival Budaya Bahari</h3>
                        <div class="event-info">
                            <h4 class="event-date">Tanggal: 5 April 2024</h4>
                            <h4 class="event-location">Lokasi: Manado</h4>
                        </div>
                        <p class="event-description">Temukan keindahan budaya pesisir dan laut dalam festival yang memukau.</p>
                    </div>
                    
                    <div class="event-box">
                        <img src="/CultureWay/Image/Poster 4.png" alt="Event 4">
                        <h3 class="event-title">Workshop Batik</h3>
                        <div class="event-info">
                            <h4 class="event-date">Tanggal: 20 Januari 2024</h4>
                            <h4 class="event-location">Lokasi: Bandung</h4>
                        </div>
                        <p class="event-description">Ikuti workshop batik untuk belajar seni membuat batik tangan yang indah.</p>
                    </div>
                </div>
            </div>
    
            <!-- Rekomendasi Spesial -->
            <div class="event-category">
                <h2>Rekomendasi Spesial</h2>
                <div class="event-boxes">
                    <div class="event-box">
                        <img src="/CultureWay/Image/Poster 5.png" alt="Bazar Rakyat Tempoe Doloe">
                        <h3 class="event-title">Bazar Rakyat Tempoe Doloe</h3>
                        <div class="event-info">
                            <h4 class="event-date">Tanggal: 10 Mei 2024</h4>
                            <h4 class="event-location">Lokasi: Yogyakarta</h4>
                        </div>
                        <p class="event-description">Nikmati suasana tradisional dalam bazar rakyat yang menyuguhkan produk-produk khas tempo dulu.</p>
                    </div>
                    
                    <div class="event-box">
                        <img src="/CultureWay/Image/Poster 6.png" alt="Lomba Vlog Bela Negara Masa Kini">
                        <h3 class="event-title">Lomba Vlog Bela Negara Masa Kini</h3>
                        <div class="event-info">
                            <h4 class="event-date">Tanggal: 18 Juni 2024</h4>
                            <h4 class="event-location">Lokasi: Bandung</h4>
                        </div>
                        <p class="event-description">Ekspresikan semangat bela negara melalui kreativitas vlog dengan tema masa kini.</p>
                    </div>
                    
                    <div class="event-box">
                        <img src="/CultureWay/Image/Poster 7.png" alt="Festival Poe Teumeureuhom">
                        <h3 class="event-title">Festival Poe Teumeureuhom</h3>
                        <div class="event-info">
                            <h4 class="event-date">Tanggal: 25 Juli 2024</h4>
                            <h4 class="event-location">Lokasi: Aceh</h4>
                        </div>
                        <p class="event-description">Meriahkan perayaan tradisi Aceh dengan pertunjukan budaya dan kuliner khas.</p>
                    </div>
                    
                    <div class="event-box">
                        <img src="/CultureWay/Image/Poster 8.png" alt="Pesta Rakyat RCTI">
                        <h3 class="event-title">Pesta Rakyat RCTI</h3>
                        <div class="event-info">
                            <h4 class="event-date">Tanggal: 30 Agustus 2024</h4>
                            <h4 class="event-location">Lokasi: Jakarta</h4>
                        </div>
                        <p class="event-description">Bergabunglah dalam pesta rakyat yang penuh hiburan dan kejutan dari RCTI.</p>
                    </div>
                </div>
            </div>
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