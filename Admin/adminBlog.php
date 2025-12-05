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
    $tanggal = $_POST['tanggal'];
    $isi_blog = $_POST['isi_blog'];
    $created_at = date('Y-m-d H:i:s');

    // Handle image upload
    $img_blog = "";
    if ($_FILES['img_blog']['name']) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["img_blog"]["name"]);
        move_uploaded_file($_FILES["img_blog"]["tmp_name"], $target_file);
        $img_blog = $target_file; // Save image path
    }

    $sql = "INSERT INTO blog_posts (judul, tanggal, img_blog, isi_blog, created_at) VALUES ('$judul', '$tanggal', '$img_blog', '$isi_blog', '$created_at')";
    $conn->query($sql);
    header("Location: admin.php");
}

// Fungsi untuk edit data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $isi_blog = $_POST['isi_blog'];

    // Handle image upload for update
    $img_blog = $_POST['current_img_blog']; // Keep the current image if no new image is uploaded
    if ($_FILES['img_blog']['name']) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["img_blog"]["name"]);
        move_uploaded_file($_FILES["img_blog"]["tmp_name"], $target_file);
        $img_blog = $target_file; // Save new image path
    }

    $sql = "UPDATE blog_posts SET judul='$judul', tanggal='$tanggal', img_blog='$img_blog', isi_blog='$isi_blog' WHERE id=$id";
    $conn->query($sql);
    header("Location: admin.php");
}

// Fungsi untuk hapus data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM blog_posts WHERE id=$id";
    $conn->query($sql);
    header("Location: admin.php");
}

// Ambil data untuk form edit
$edit = false;
if (isset($_GET['edit'])) {
    $edit = true;
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM blog_posts WHERE id=$id");
    $post = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blog Posts</title>
    <link rel="stylesheet" href="adminStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Blog Admin</h2>
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
            <!-- Form Tambah / Edit Blog -->
            <div class="form-container">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php if ($edit): ?>
                        <input type="hidden" name="id" value="<?= $post['id'] ?>">
                        <input type="hidden" name="current_img_blog" value="<?= $post['img_blog'] ?>">
                    <?php endif; ?>
                    <label>Judul:</label><br>
                    <input type="text" name="judul" value="<?= $edit ? $post['judul'] : '' ?>" required><br>
                    <label>Tanggal:</label><br>
                    <input type="date" name="tanggal" value="<?= $edit ? $post['tanggal'] : '' ?>" required><br>
                    <label>Isi Blog:</label><br>
                    <textarea name="isi_blog" required><?= $edit ? $post['isi_blog'] : '' ?></textarea><br>
                    <label>Gambar Blog:</label><br>
                    <input type="file" name="img_blog"><br>
                    <button type="submit" name="<?= $edit ? 'update' : 'add' ?>">
                        <?= $edit ? 'Update' : 'Tambah' ?>
                    </button>
                </form>
            </div>

            <!-- Tabel Data Blog -->
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Gambar</th>
                        <th>Isi Blog</th>
                        <th>Created At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM blog_posts";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0):
                        while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['judul'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <td>
                                    <?php if ($row['img_blog']): ?>
                                        <img src="<?= $row['img_blog'] ?>" alt="Blog Image" width="100">
                                    <?php else: ?>
                                        No Image
                                    <?php endif; ?>
                                </td>
                                <td><?= $row['isi_blog'] ?></td>
                                <td><?= $row['created_at'] ?></td>
                                <td>
                                    <a href="admin.php?edit=<?= $row['id'] ?>" class="table-btn edit-btn">Edit</a>
                                    <a href="admin.php?delete=<?= $row['id'] ?>" class="table-btn delete-btn" onclick="return confirm('Hapus data ini?')">Hapus</a>
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
</body>
</html>
