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
    <link rel="stylesheet" href="home.css">
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

   <!-- Hero Welcoming -->
    <header class="hero-section">
        <div class="hero-content text-center text-light">
            <h1>Jelajahi Kekayaan Seni dan Budaya Indonesia</h1>
            <p>Tempat kamu menemukan destinasi wisata seni dan budaya Indonesia serta pelajari sejarah dari tiap wisata yang ingin kamu kunjungi</p>
        </div>
    </header>

    <section class="popular-section">
        <h2>Populer di CultureWay</h2>
        <p>Destinasi budaya menarik yang kami rekomendasikan untuk pengalaman yang tak terlupakan.</p>
        <div class="container">
        <div class="popular-boxes">
            <div class="popular-box">
                <img src="/CultureWay/Image/Ullen Sentalu.jpeg" alt="Gambar 1">
                <h3>Ullen Sentalu</h3>
                <p>Museum budaya Yogyakarta dengan koleksi seni dan sejarah Jawa.</p>
                <div class="download-section">
                    <a href="pemasanan.php">Pesan Sekarang</a>
                </div>
            </div>
            <div class="popular-box">
                <img src="/CultureWay/Image/desa penglipuran, bali.jpg" alt="Gambar 2">
                <h3>Desa Penglipuran</h3>
                <p>Desa adat Bali dengan keindahan arsitektur tradisional dan suasana asri.</p>
                <div class="download-section">
                    <a href="pemasanan.php">Pesan Sekarang</a>
                </div>
            </div>
            <div class="popular-box">
                <img src="/CultureWay/Image/waerebo.jpg" alt="Gambar 3">
                <h3>Wae Rebo</h3>
                <p>Desa di Flores dengan rumah adat dan pemandangan pegunungan yang mempesona.</p>
                <div class="download-section">
                    <a href="pemasanan.php">Pesan Sekarang</a>
                </div>
            </div>
            <div class="popular-box">
                <img src="/CultureWay/Image/istana tirta gangga, bali.jpg" alt="Gambar 4">
                <h3>Istana Tirta Ganga</h3>
                <p>Taman air kerajaan Bali dengan kolam, air mancur, dan arsitektur khas.</p>
                <div class="download-section">
                    <a href="pemasanan.php">Pesan Sekarang</a>
                </div>
            </div>
            <div class="popular-box">
                <img src="/CultureWay/Image/pura tanah lot.jpg" alt="Gambar 5">
                <h3>Pura Tanah Lot</h3>
                <p>Pura ikonik di Bali yang menawarkan panorama laut yang menakjubkan.</p>
                <div class="download-section">
                    <a href="pemasanan.php">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="slider-section"> 
        <div class="container">
        <div class="slider-content">
            <!-- Bagian Teks -->
            <div class="slider-text">
                <h2>Festival Budaya</h2>
                <p>Temukan pesona kekayaan budaya Indonesia melalui berbagai festival memukau.</p>
            </div>
            <!-- Bagian Slider -->
            <div class="slider-container">
                <div class="slider-item">
                    <div class="category-card">
                        <img src="/CultureWay/Image/Selat Lembah.jpg" alt="Selat Lembah">
                        <div class="category-overlay">
                            <h4 class="category-name">Festival Pesona Selat Lembah, Bitung</h4>
                            <p class="category-description">Perayaan budaya maritim yang menampilkan keindahan alam dan kekayaan tradisi pesisir Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="category-card">
                        <img src="/CultureWay/Image/Iraw Tengkayau.jpeg.jpg" alt="Snack">
                        <div class="category-overlay">
                            <h4 class="category-name">Iraw Tengkayu, Tarakan</h4>
                            <p class="category-description">Upacara adat khas Tarakan yang mengarak perahu hias sebagai simbol syukur dan keberkahan.</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="category-card">
                        <img src="/CultureWay/Image/Gandrung Sewu.jpg" alt="Gourmet">
                        <div class="category-overlay">
                            <h4 class="category-name">Festival Gandrung Sewu, Banyuwangi</h4>
                            <p class="category-description">Pertunjukan spektakuler seribu penari Gandrung di pantai Banyuwangi yang memukau dengan seni dan budaya lokal.</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="category-card">
                        <img src="/CultureWay/Image/Wayang Jogja.jpg" alt="Drink">
                        <div class="category-overlay">
                            <h4 class="category-name">Wayang Jogja Night Carnival, Yogyakarta</h4>
                            <p class="category-description">Karnaval malam unik di Yogyakarta yang memadukan seni wayang, musik, dan parade kostum bercahaya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript Slick Carousel -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="homeSlider.js"></script>
        </div>
    </section>

    <section class="promo-section">
        <div class="container">
            <h2>Promo Terbaik</h2>
            <p class="promo-description-header">
                Jelajahi berbagai promo menarik yang dapat membuat liburan Anda lebih hemat dan berkesan.
            </p>
            <div class="promo-container">
                <!-- Promo 1 -->
                <div class="promo-box">
                    <img src="/CultureWay/Image/Promo Liburan.png" alt="Liburan Akhir Tahun" class="promo-image">
                    <h3 class="promo-name">Promo Liburan Akhir Tahun</h3>
                    <p class="promo-period">Periode: 20 Des - 5 Jan</p>
                    <p class="promo-price">
                        <span class="original-price">Rp 500.000</span>
                        <span class="promo-price-value">Rp 350.000</span>
                    </p>
                    <p class="promo-description">Nikmati liburan akhir tahun dengan diskon spesial untuk paket wisata pilihan.</p>
                    <div class="download-section">
                        <a href="pemasanan.php">Pilih Promo</a>
                    </div>
                </div>
                <!-- Promo 2 -->
                <div class="promo-box">
                    <img src="/CultureWay/Image/Promo Liburan 2.png" alt="Paket Borobudor" class="promo-image">
                    <h3 class="promo-name">Promo Borobudor Visit</h3>
                    <p class="promo-period">Periode: Setiap Sabtu & Minggu</p>
                    <p class="promo-price">
                        <span class="original-price">Rp 300.000</span>
                        <span class="promo-price-value">Rp 250.000</span>
                    </p>
                    <p class="promo-description">Dapatkan harga spesial untuk paket perjalanan singkat di akhir pekan.</p>
                    <div class="download-section">
                        <a href="pemasanan.php">Pilih Promo</a>
                    </div>
                </div>
                <!-- Promo 3 -->
                <div class="promo-box">
                    <img src="/CultureWay/Image/Promo Liburan 3.png" alt="Paket Toraja" class="promo-image">
                    <h3 class="promo-name">Promo Toraja Experinece</h3>
                    <p class="promo-period">Periode: Hingga 15 Desember</p>
                    <p class="promo-price">
                        <span class="original-price">Rp 400.000</span>
                        <span class="promo-price-value">Rp 300.000</span>
                    </p>
                    <p class="promo-description">Pesan lebih awal untuk mendapatkan diskon khusus pada paket wisata favorit Anda.</p>
                    <div class="download-section">
                        <a href="pemasanan.php">Pilih Promo</a>
                    </div>
                </div>
                <!-- Promo 4 -->
                <div class="promo-box">
                    <img src="/CultureWay/Image/Promo Liburan 4.png" alt="Paket Bali" class="promo-image">
                    <h3 class="promo-name">Promo Bali Cultural Tour</h3>
                    <p class="promo-period">Periode: 1 Des - 31 Jan</p>
                    <p class="promo-price">
                        <span class="original-price">Rp 700.000</span>
                        <span class="promo-price-value">Rp 600.000</span>
                    </p>
                    <p class="promo-description">Diskon spesial untuk paket wisata keluarga, cocok untuk liburan bersama orang tercinta.</p>
                    <div class="download-section">
                        <a href="pemasanan.php">Pilih Promo</a>
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
                <form action="submitSaran.php" method="post">
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