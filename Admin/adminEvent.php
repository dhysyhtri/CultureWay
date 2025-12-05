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
    $name = $_POST['name'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $keterangan = $_POST['keterangan'];

    // Handle image upload
    $image = "";
    if ($_FILES['image']['name']) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file; // Save image path
    }

    $sql = "INSERT INTO events (name, location, date, keterangan, image) VALUES ('$name', '$location', '$date', '$keterangan', '$image')";
    $conn->query($sql);
    header("Location: admin.php");
}

// Fungsi untuk edit data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $keterangan = $_POST['keterangan'];

    // Handle image upload for update
    $image = $_POST['current_image']; // Keep the current image if no new image is uploaded
    if ($_FILES['image']['name']) {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file; // Save new image path
    }

    $sql = "UPDATE events SET name='$name', location='$location', date='$date', keterangan='$keterangan', image='$image' WHERE id=$id";
    $conn->query($sql);
    header("Location: admin.php");
}

// Fungsi untuk hapus data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM events WHERE id=$id";
    $conn->query($sql);
    header("Location: admin.php");
}

// Ambil data untuk form edit
$edit = false;
if (isset($_GET['edit'])) {
    $edit = true;
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM events WHERE id=$id");
    $event = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Event Pariwisata</title>
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
                            <li><a href="adminSulawesi.php?kategori=sulawesi">Maluku</a></li>
                            <li><a href="adminSulawesi.php?kategori=sulawesi">Nusa Tenggara</a></li>
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
            <!-- Form Tambah / Edit Event -->
            <div class="form-container">
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php if ($edit): ?>
                        <input type="hidden" name="id" value="<?= $event['id'] ?>">
                        <input type="hidden" name="current_image" value="<?= $event['image'] ?>">
                    <?php endif; ?>
                    <label>Nama Event:</label><br>
                    <input type="text" name="name" value="<?= $edit ? $event['name'] : '' ?>" required><br>
                    <label>Lokasi:</label><br>
                    <input type="text" name="location" value="<?= $edit ? $event['location'] : '' ?>" required><br>
                    <label>Tanggal:</label><br>
                    <input type="date" name="date" value="<?= $edit ? $event['date'] : '' ?>" required><br>
                    <label>Keterangan:</label><br>
                    <input type="text" name="keterangan" value="<?= $edit ? $event['keterangan'] : '' ?>" required><br>
                    
                    <!-- Image Upload Field -->
                    <label>Gambar Event:</label>
                    <br><input type="file" name="image"><br>

                    <button type="submit" name="<?= $edit ? 'update' : 'add' ?>">
                        <?= $edit ? 'Update' : 'Tambah' ?>
                    </button>
                </form>
            </div>

            <!-- Tabel Data Event -->
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Event</th>
                        <th>Lokasi</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM events";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0):
                        while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['location'] ?></td>
                                <td><?= $row['date'] ?></td>
                                <td><?= $row['keterangan'] ?></td>
                                <td>
                                    <?php if ($row['image']): ?>
                                        <img src="<?= $row['image'] ?>" alt="Event Image" width="100">
                                    <?php else: ?>
                                        No Image
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="adminEditPengguna.php?edit_user=<?= $events['id']; ?>" class="table-btn edit-btn">Edit</a>
                                    <a href="javascript:void(0);" class="table-btn delete-btn" onclick="deleteevents(<?= $events['id']; ?>)">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile;
                    else: ?>
                        <tr>
                            <td colspan="6">Tidak ada data</td>
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