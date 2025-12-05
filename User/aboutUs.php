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
    <link rel="stylesheet" href="aboutUs.css">
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
            <h1>CultureWay</h1>
            <p>Feel the Art, Live the Culture</p>
        </div>
    </section>

    <main class="main-content">
        <section class="description">
            <div class="text">
                <h2>Tentang CultureWay</h2>
                <p>
                    CultureWay adalah platform inovatif yang berfokus pada pelestarian warisan budaya dan 
                    pengembangan pariwisata budaya. Kami percaya bahwa budaya adalah jembatan yang 
                    menghubungkan masyarakat, meningkatkan pemahaman, dan mempererat solidaritas. 
                    Dengan CultureWay, Anda dapat menemukan pengalaman budaya yang mendalam, 
                    baik melalui kunjungan langsung ke tempat-tempat bersejarah maupun melalui 
                    informasi yang mendidik dan menarik. Kami berkomitmen untuk menginspirasi masyarakat 
                    agar lebih mengenal, mencintai, dan melestarikan kekayaan budaya dunia.
                </p>
            </div>
            <div class="image-container">
                <img src="CultureWay Background.png" alt="Gambar Deskripsi" class="image">
            </div>
        </section>

        <section class="vision-mission">
            <h2>Visi & Misi Kami</h2>
            <div class="vision">
                <h3>Visi</h3>
                <p>Menjadi platform terdepan dalam mempromosikan pariwisata budaya dan melestarikan warisan budaya dunia.</p>
            </div>
            <div class="mission">
                <h3>Misi</h3>
                <ul>
                    <li>Menghubungkan masyarakat dengan pengalaman budaya yang autentik.</li>
                    <li>Meningkatkan kesadaran akan pentingnya pelestarian budaya.</li>
                    <li>Mendorong pariwisata berkelanjutan melalui inovasi teknologi.</li>
                </ul>
            </div>
        </section>
        

        <section class="team">
            <h2>Tim Kami</h2>
            <div class="team-members">
                <div class="member">
                    <img src="/CultureWay/Image/Gabriel.png" alt="Foto Pengembang 1">
                    <h3>Gabriel Alfareslanda</h3>
                    <p>Founder & CEO</p>
                </div>
                <div class="member">
                    <img src="/CultureWay/Image/Bima.png" alt="Foto Pengembang 2">
                    <h3>Bima Satria One</h3>
                    <p>CTO</p>
                </div>
                <div class="member">
                    <img src="/CultureWay/Image/Dhey.png" alt="Foto Pengembang 3">
                    <h3>Dheysavina Dwi S.</h3>
                    <p>Product Manager</p>
                </div>
                <div class="member">
                    <img src="/CultureWay/Image/Yolan.png" alt="Foto Pengembang 4">
                    <h3>Yolan Refaya Br P.</h3>
                    <p>UI/UX Designer</p>
                </div>
                <div class="member">
                    <img src="/CultureWay/Image/Galang.png" alt="Foto Pengembang 5">
                    <h3>Galang Adhi Luhung </h3>
                    <p>Marketing Specialist</p>
                </div>
            </div>
        </section>

        <section class="values">
            <h2>Nilai Utama Kami</h2>
            <p>
                CultureWay menjunjung tinggi nilai keberagaman, keberlanjutan, dan inovasi. 
                Kami percaya bahwa budaya memiliki kekuatan untuk menyatukan masyarakat 
                dan menciptakan masa depan yang lebih baik bagi semua.
            </p>
        </section>
    </main>

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