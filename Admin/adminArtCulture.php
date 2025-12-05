<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "cultureway";
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fungsi untuk tambah data
if (isset($_POST['add'])) {
    $judul = $_POST['judul'];
    $asal = $_POST['asal'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];

    // Handle image upload
    $image = "";
    if ($_FILES['image']['name']) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file; // Save image path
    }

    $sql = "INSERT INTO articles (image, judul, asal, content, category_id) VALUES ('$image', '$judul', '$asal', '$content', '$category_id')";
    $conn->query($sql);
    header("Location: admin.php");
}

// Fungsi untuk edit data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $asal = $_POST['asal'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];

    // Handle image upload for update
    $image = $_POST['current_image']; // Keep the current image if no new image is uploaded
    if ($_FILES['image']['name']) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file; // Save new image path
    }

    $sql = "UPDATE articles SET image='$image', judul='$judul', asal='$asal', content='$content', category_id='$category_id' WHERE id=$id";
    $conn->query($sql);
    header("Location: admin.php");
}

// Fungsi untuk hapus data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM articles WHERE id=$id";
    $conn->query($sql);
    header("Location: admin.php");
}

// Ambil data untuk form edit
$edit = false;
if (isset($_GET['edit'])) {
    $edit = true;
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM articles WHERE id=$id");
    $article = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Artikel</title>
    <link rel="stylesheet" href="adminStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Artikel Admin</h2>
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
            <!-- Form Tambah / Edit Artikel -->
            <div class="form-container">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php if ($edit): ?>
                        <input type="hidden" name="id" value="<?= $article['id'] ?>">
                        <input type="hidden" name="current_image" value="<?= $article['image'] ?>">
                    <?php endif; ?>
                    <label>Judul Artikel:</label><br>
                    <input type="text" name="judul" value="<?= $edit ? $article['judul'] : '' ?>" required><br>
                    <label>Asal:</label><br>
                    <input type="text" name="asal" value="<?= $edit ? $article['asal'] : '' ?>" required><br>
                    <label>Konten:</label><br>
                    <textarea name="content" required><?= $edit ? $article['content'] : '' ?></textarea><br>
                    <label>Kategori ID:</label><br>
                    <input type="number" name="category_id" value="<?= $edit ? $article['category_id'] : '' ?>" required><br>

                    <!-- Image Upload Field -->
                    <label>Gambar Artikel:</label>
                    <br><input type="file" name="image"><br>

                    <button type="submit" name="<?= $edit ? 'update' : 'add' ?>">
                        <?= $edit ? 'Update' : 'Tambah' ?>
                    </button>
                </form>
            </div>

            <!-- Tabel Data Artikel -->
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Asal</th>
                        <th>Konten</th>
                        <th>Kategori ID</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM articles";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0):
                        while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['judul'] ?></td>
                                <td><?= $row['asal'] ?></td>
                                <td><?= $row['content'] ?></td>
                                <td><?= $row['category_id'] ?></td>
                                <td>
                                    <?php if ($row['image']): ?>
                                        <img src="<?= $row['image'] ?>" alt="Article Image" width="100">
                                    <?php else: ?>
                                        No Image
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="?edit=<?= $row['id'] ?>" class="table-btn edit-btn">Edit</a>
                                    <a href="?delete=<?= $row['id'] ?>" class="table-btn delete-btn">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile;
                    else: ?>
                        <tr>
                            <td colspan="7">Tidak ada data</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
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
