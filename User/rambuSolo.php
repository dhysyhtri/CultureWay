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
    <link rel="stylesheet" href="ngaben.css">
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

    <div class="ngaben-container">
        <h1 class="ngaben-title">Rambu Solo (Toraja)</h1>
        <img src="/CultureWay/Image/Rambu Solo.png" alt="Upacara Ngaben Bali" class="ngaben-image">

        <p class="ngaben-description">
        Rambu Solo adalah upacara pemakaman adat yang dilakukan oleh masyarakat Tana Toraja di Sulawesi Selatan. Upacara ini merupakan salah satu ritual terpenting dalam kehidupan masyarakat Toraja, yang dianggap sebagai bentuk penghormatan tertinggi kepada orang yang telah meninggal. Rambu Solo seringkali dilakukan dengan prosesi panjang dan biaya yang besar, melibatkan seluruh keluarga dan komunitas.
        </p>

        <h2 class="ngaben-subtitle">Makna dan Simbolisme</h2>
        <p class="ngaben-content">
        Upacara Rambu Solo memiliki makna sebagai perjalanan terakhir bagi orang yang telah meninggal menuju Puya, yaitu dunia roh dalam kepercayaan masyarakat Toraja. Orang yang telah meninggal dianggap tidak benar-benar mati sebelum upacara Rambu Solo dilaksanakan. Oleh karena itu, upacara ini menjadi sangat penting untuk memastikan roh mereka dapat diterima di alam baka.
        </p>

        <h2 class="ngaben-subtitle">Proses dan Tahapan</h2>
        <p class="ngaben-content">
        Upacara Rambu Solo terdiri dari beberapa tahapan, yang biasanya berlangsung selama beberapa hari. Pertama, jenazah ditempatkan di dalam tongkonan (rumah adat Toraja) selama beberapa waktu sebelum upacara. Selama prosesi, kerbau dan babi dikorbankan sebagai persembahan, yang melambangkan penghormatan kepada leluhur dan dewa. Puncak acara adalah pemakaman, di mana jenazah diletakkan di dalam liang batu atau gua-gua yang terletak di perbukitan Toraja.
        </p>

        <h2 class="ngaben-subtitle">Nilai Sosial dan Budaya</h2>
        <p class="ngaben-content">
        Rambu Solo tidak hanya berfungsi sebagai ritual keagamaan, tetapi juga sebagai simbol status sosial di masyarakat Toraja. Semakin besar dan mewah upacara yang digelar, semakin tinggi status sosial keluarga tersebut di mata masyarakat. Selain itu, upacara ini mencerminkan hubungan erat antara masyarakat Toraja dengan alam, tradisi leluhur, dan nilai-nilai kebersamaan.
        </p>
    </div>

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