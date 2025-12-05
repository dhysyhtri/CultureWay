<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Pengguna</title>
    <link rel="stylesheet" href="adminStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Pariwisata Admin</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="admin.php" class="active">Pengguna</a></li>

                    <li class="dropdown">
                        <a href="javascript:void(0);">Destinasi</a>
                        <ul class="submenu">
                            <li><a href="adminJawa.php?kategori=jawa">Pulau Jawa</a></li>
                            <li><a href="adminSumatra.php?kategori=sumatra">Sumatra</a></li>
                            <li><a href="adminSulawesi.php?kategori=sulawesi">Sulawesi</a></li>
                            <li><a href="adminKalimantan.php?kategori=kalimantan">Kalimantan</a></li>
                            <li><a href="adminMaluku.php?kategori=maluku">Maluku</a></li>
                            <li><a href="adminNusaTenggara.php?kategori=nusa tenggara">Nusa Tenggara</a></li>
                            <li><a href="adminSulawesi.php?kategori=sulawesi">Sulawesi</a></li>
                            <li><a href="adminPapua.php?kategori=papua">Papua</a></li>
                            <li><a href="adminBali.php?kategori=bali">Bali</a></li>
                            <li><a href="adminLombok.php?kategori=lombok">Lombok</a></li>
                        </ul>
                    </li>
                    <li><a href="adminEvent.php">Event</a></li>
                    <li><a href="adminArtCulture.php">Art & Culture</a></li>
                    <li><a href="adminBlog.php">Blog</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Content goes here -->
        </div>
    </div>

    <script>
        // Script untuk menangani klik pada dropdown
        $(document).ready(function () {
            // Ketika menu Destinasi diklik
            $('.dropdown > a').click(function (e) {
                e.preventDefault();
                // Toggle submenu untuk muncul atau menghilang
                $(this).next('.submenu').slideToggle();
                // Menyembunyikan dropdown lainnya jika ada yang terbuka
                $('.submenu').not($(this).next()).slideUp();
            });
        });
    </script>

</body>

</html>
