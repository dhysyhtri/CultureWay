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
    <link rel="stylesheet" href="berita1.css">
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
            <h1>Informasi Terkini Seputar Budaya Indonesia</h1>
            <p>Dapatkan informasi terkini untuk lebih mengenal Indonesia.</p>
        </div>
    </section>

    <div class="chattra-article">
        <h2 class="chattra-title">Pemasangan Chattra di Candi Borobudur Ditunda</h2>

        <img class="chattra-image" src="/CultureWay/Image/chattra1.jpg" alt="Chattra di Borobudur">

        <p class="chattra-content">
            Melansir dari laman Kementerian Agama (Kemenag), penundaan ini selaras dengan hasil kajian teknis dan Detail Engineering Design (DED) yang disusun oleh tim ahli dari Badan Riset dan Inovasi Nasional (BRIN) yang menyimpulkan bahwa perlu dilakukan studi yang lebih mendalam tentang otentisitas chattra. Dengan demikian, rencana peresmian chattra pada 18 September 2024 ditunda.
        </p>
        <p class="chattra-content">
            Juru Bicara Kemenag, Sunanto, menjelaskan bahwa berdasarkan hasil kajian teknis oleh pakar BRIN atas permohonan dari Bimas Buddha Kemenag, kondisi material saat ini belum memungkinkan pemasangan chattra karena kondisi batu yang antara lain tidak utuh.
        </p>
        <blockquote class="chattra-quote">
            "Berdasarkan hasil kajian teknis yang komprehensif, meliputi pengamatan langsung, pengukuran, pengujian, serta perhitungan dan analisis kekuatan, bahwa kondisi material chattra ada yang tidak utuh atau terbagi banyak bagian batu dan batu bahan material tidak memiliki kait antar batu. Maka, memerlukan tahapan yang harus dikoordinasikan sesuai ketentuan yang berlaku," jelas Sunanto.
        </blockquote>

        <h3 class="chattra-subtitle">Penolakan IAAI</h3>
        <p class="chattra-content">
            Ikatan Ahli Arkeologi Indonesia (IAAI), dilansir dari detikTravel, dengan tegas menolak rencana pemasangan Chattra di Candi Borobudur. Menurut Ketua IAAI, Marsis Sutopo, kajian yang menjadi dasar pemasangan tersebut dinilai tidak memenuhi standar akademis dan melanggar prosedur hukum yang diatur dalam Undang-Undang Nomor 11 Tahun 2010 tentang Cagar Budaya.
        </p>
        <p class="chattra-content">
            Marsis menjelaskan bahwa pemasangan Chattra ini didasarkan pada asumsi yang tidak memiliki bukti ilmiah yang kuat. Menurut IAAI, proses kajian tidak sesuai dengan aturan yang seharusnya diterapkan dalam perubahan yang menyangkut situs cagar budaya, apalagi Borobudur adalah warisan dunia yang diakui UNESCO.
        </p>

        <h3 class="chattra-subtitle">Kehilangan Status dari UNESCO</h3>
        <p class="chattra-content">
            Penolakan ini juga terkait dengan kekhawatiran akan status Borobudur sebagai salah satu situs warisan dunia yang terdaftar di UNESCO. Jika pemasangan chattra dilakukan tanpa prosedur yang benar dan tanpa persetujuan dari UNESCO, status Borobudur sebagai situs warisan dunia bisa terancam.
        </p>
        <p class="chattra-content">
            Lebih lanjut, Candi Borobudur juga dapat kehilangan autentisitas jika pemasangan chattra dilakukan tanpa kajian yang tepat. Borobudur bukan hanya sebuah bangunan cagar budaya, tetapi juga simbol nasional dan warisan sejarah. Setiap perubahan yang dilakukan pada candi harus melalui prosedur yang sangat ketat untuk menjaga keaslian bentuk dan makna sejarahnya. Pemasangan chattra, yang merupakan semacam payung hiasan yang biasa dipasang di atas stupa, menurut Marsis, tidak relevan dengan data sejarah asli yang dimiliki Borobudur.
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