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
    <link rel="stylesheet" href="destination.css">
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
            <h1>Destinasi Keindahan Nusantara</h1>
            <p>Jelajahi pesona pulau-pulau di Indonesia yang kaya akan budaya, alam, dan keunikan.</p>
        </div>
    </section>

    <section class="island-category">
        <div class="category-grid">
            <a href="pulauJawa.php" class="category-box">
                <img src="/CultureWay/Image/Destinasi Jawa.jpg" alt="Pulau Jawa">
                <div class="category-info">
                    <h3>Pulau Jawa</h3>
                    <p>Nikmati perpaduan antara keindahan alam, warisan budaya, dan kehidupan kota modern. Dari Candi Borobudur hingga Gunung Bromo, Pulau Jawa menawarkan pengalaman tak terlupakan</p>
                </div>
            </a>
            <a href="pulauSumatra.php" class="category-box">
                <img src="/CultureWay/Image/Destinasi Sumatera.jpg" alt="Pulau Sumatra">
                <div class="category-info">
                    <h3>Pulau Sumatra</h3>
                    <p>Jelajahi alam liar yang penuh petualangan, mulai dari Danau Toba yang megah hingga hutan tropis yang menjadi rumah bagi orangutan dan harimau Sumatra.</p>
                </div>
            </a>
            <a href="pulauKalimantan.php" class="category-box">
                <img src="/CultureWay/Image/Destinasi Kalimantan.jpg" alt="Pulau Kalimantan">
                <div class="category-info">
                    <h3>Pulau Kalimantan</h3>
                    <p>Menyusuri sungai-sungai panjang di tengah hutan hujan tropis, sambil menikmati budaya Dayak yang autentik dan keajaiban alam yang tak tergantikan.</p>
                </div>
            </a>
            <a href="pulauSulawesi.php" class="category-box">
                <img src="/CultureWay/Image/Destinasi Sulawesi.jpg" alt="Pulau Sulawesi">
                <div class="category-info">
                    <h3>Pulau Sulawesi</h3>
                    <p>Temukan kekayaan bawah laut di Taman Laut Bunaken dan nikmati pesona budaya unik seperti tradisi Toraja yang memikat hati.</p>
                </div>
            </a>
            <a href="pulauBali.php" class="category-box">
                <img src="/CultureWay/Image/Destinasi Bali.jpg" alt="Pulau Bali">
                <div class="category-info">
                    <h3>Pulau Bali</h3>
                    <p>Pulau Dewata yang mempesona dengan pantai indah, pura suci, dan budaya yang memikat, sempurna untuk petualangan maupun relaksasi.</p>
                </div>
            </a>
            <a href="pulauNusaTenggara.php" class="category-box">
                <img src="/CultureWay/Image/Destinasi Nusa Tenggara.jpeg" alt="Pulau Nusa Tenggara">
                <div class="category-info">
                    <h3>Pulau Nusa Tenggara</h3>
                    <p>Eksplorasi pantai pasir pink, komodo yang legendaris, dan panorama alam menakjubkan yang menawarkan ketenangan sejati.</p>
                </div>
            </a>
            <a href="pulauMaluku.php" class="category-box">
                <img src="/CultureWay/Image/Destinasi Maluku.jpeg" alt="Pulau Maluku">
                <div class="category-info">
                    <h3>Pulau Maluku</h3>
                    <p>Nikmati keindahan kepulauan rempah-rempah, dengan pantai berpasir putih, air laut jernih, dan sejarah perdagangan yang memikat.</p>
                </div>
            </a>
            <a href="pulauPapua.php" class="category-box">
                <img src="/CultureWay/Image/Destinasi Papua.png" alt="Pulau Papua">
                <div class="category-info">
                    <h3>Pulau Papua</h3>
                    <p>Rasakan petualangan sejati di tanah Papua dengan lanskap gunung, laut biru, dan budaya asli yang penuh keajaiban.</p>
                </div>
            </a>
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
