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
    <title>CultureWay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="artCulture.css">
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

    <section class="hero-section">
        <div class="hero-content">
            <h1>Eksplorasi Pesona Seni dan Budaya Indonesia</h1>
            <p>Temukan keberagaman budaya dan kekayaan tradisi di setiap sudut pulau Indonesia.</p>
        </div>
    </section>

    <section class="culture-section">
        <div class="culture-category">
            <h2>Budaya dan Tradisi Indonesia</h2>

            <!-- Upacara Adat Section -->
            <h3>Upacara Adat</h3>
            <div class="category-grid">
                <a href="Ngaben.php" class="category-box">
                    <img src="/CultureWay/Image/Ngaben.png" alt="Ngaben (Bali)">
                    <div class="category-info">
                        <h3>Ngaben</h3>
                        <p>Bali</p>
                    </div>
                </a>
                <a href="rambuSolo.php" class="category-box">
                    <img src="/CultureWay/Image/Rambu Solo.jpeg" alt="Rambu Solo (Toraja)">
                    <div class="category-info">
                        <h3>Rambu Solo</h3>
                        <p>Toraja</p>
                    </div>
                </a>
                <a href="Kasada.php" class="category-box">
                    <img src="/CultureWay/Image/Kasada.jpeg" alt="Kasada (Tengger, Jawa Timur)">
                    <div class="category-info">
                        <h3>Kasada</h3>
                        <p>Tengger, Jawa Timur</p>
                    </div>
                </a>
                <a href="Tabuik.php" class="category-box">
                    <img src="/CultureWay/Image/Tabuik.jpg" alt="Tabuik (Sumatera Barat)">
                    <div class="category-info">
                        <h3>Tabuik</h3>
                        <p>Sumatra Barat</p>
                    </div>
                </a>
            </div>

            <!-- Festival Budaya Section -->
            <h3>Festival Budaya</h3>
            <div class="category-grid">
                <a href="Danau Toba.php" class="category-box">
                    <img src="/CultureWay/Image/Danau Toba.jpeg" alt="Danau Toba (Sumatera Utara)">
                    <div class="category-info">
                        <h3>Festival Danau Toba</h3>
                        <p>Sumatra Utara</p>
                    </div>
                </a>
                <a href="Krakatau.php" class="category-box">
                    <img src="/CultureWay/Image/Krakatau.jpeg" alt="Festival Krakatau (Lampung)">
                    <div class="category-info">
                        <h3>Festival Krakatau</h3>
                        <p>Lampung</p>
                    </div>
                </a>
                <a href="Pasola.php" class="category-box">
                    <img src="/CultureWay/Image/Pasola.jpeg" alt="Pasola (Sumba, NTT)">
                    <div class="category-info">
                        <h3>Pasola</h3>
                        <p>Sumba, NTT</p>
                    </div>
                </a>
                <a href="Tambora.php" class="category-box">
                    <img src="/CultureWay/Image/Tambora.jpg" alt="Festival Tambora (Sumbawa, NTB)">
                    <div class="category-info">
                        <h3>Festival Tambora</h3>
                        <p>Sumbawa, NTB</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="culture-section">
        <div class="culture-category">
            <h2>Seni Tradisional Indonesia</h2>

            <!-- Seni Tari Section -->
            <h3>Seni Tari</h3>
            <div class="category-grid">
                <a href="tariJaipong.php" class="category-box">
                    <img src="/CultureWay/Image/Jaipong.jpg" alt="Tari Jaipong">
                    <div class="category-info">
                        <h3>Tari jaipong</h3>
                        <p>Sunda, Jawa Barat</p>
                    </div>
                </a>
                <a href="tariMondotambe.php" class="category-box">
                    <img src="/CultureWay/Image/Mondotambe.jpg" alt="Tari Mondotambe">
                    <div class="category-info">
                        <h3>Tari Mondotambe</h3>
                        <p>Sulawesi Tenggara</p>
                    </div>
                </a>
                <a href="tariSaman.php" class="category-box">
                    <img src="/CultureWay/Image/Saman.jpeg" alt="Tari Saman">
                    <div class="category-info">
                        <h3>Tari Saman</h3>
                        <p>Aceh</p>
                    </div>
                </a>
                <a href="tariKecak.php" class="category-box">
                    <img src="/CultureWay/Image/Kecak.png" alt="Tari Kecak">
                    <div class="category-info">
                        <h3>Tari Kecak</h3>
                        <p>Bali</p>
                    </div>
                </a>
            </div>

            <!-- Seni Musik Section -->
            <h3>Seni Musik</h3>
            <div class="category-grid">
                <a href="gamelan.php" class="category-box">
                    <img src="/CultureWay/Image/Gamelan.jpg" alt="Gamelan">
                    <div class="category-info">
                        <h3>Gamelan</h3>
                        <p>Jawa, Bali</p>
                    </div>
                </a>
                <a href="angklung.php" class="category-box">
                    <img src="/CultureWay/Image/Angklung.jpg" alt="Angklung">
                    <div class="category-info">
                        <h3>Angklung</h3>
                        <p>Sunda, Jawa Barat</p>
                    </div>
                </a>
                <a href="sasando.php" class="category-box">
                    <img src="/CultureWay/Image/Sasando.jpeg" alt="Sasando">
                    <div class="category-info">
                        <h3>Sasando</h3>
                        <p>Pulau Rote, NTT</p>
                    </div>
                </a>
                <a href="kolintang.php" class="category-box">
                    <img src="/CultureWay/Image/Kolintang.jpeg" alt="Kolintang">
                    <div class="category-info">
                        <h3>Kolintang</h3>
                        <p>Minahasa, Sulawesi Utara</p>
                    </div>
                </a>
            </div>

            <!-- Seni Rupa Section -->
            <h3>Seni Rupa</h3>
            <div class="category-grid">
                <a href="batik.php" class="category-box">
                    <img src="/CultureWay/Image/Batik.png" alt="Batik">
                    <div class="category-info">
                        <h3>Batik</h3>
                        <p>Jawa</p>
                    </div>
                </a>
                <a href="tenunIkat.php" class="category-box">
                    <img src="/CultureWay/Image/Tenun Ikat.jpeg" alt="Tenun Ikat">
                    <div class="category-info">
                        <h3>Tenun Ikat</h3>
                        <p>Nusa Tenggara</p>
                    </div>
                </a>
                <a href="kamasan.php" class="category-box">
                    <img src="/CultureWay/Image/Kamasan.jpg" alt="Kamasan">
                    <div class="category-info">
                        <h3>Kamasan</h3>
                        <p>Bali</p>
                    </div>
                </a>
                <a href="wayangKulit.php" class="category-box">
                    <img src="/CultureWay/Image/Wayang Kulit.jpeg" alt="Wayang Kulit">
                    <div class="category-info">
                        <h3>Wayang Kulit</h3>
                        <p>Jawa</p>
                    </div>
                </a>
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