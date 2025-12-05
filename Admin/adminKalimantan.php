<?php
session_start();
include "functions.php"; // Pastikan file koneksi sudah benar

// Cek login admin
if (!isset($_SESSION['registrasi']) || $_SESSION['registrasi']['role'] != 'admin') {
    header('location:login.php');
    exit;
}

// Ambil semua data Kalimantan
$kalimantan = mysqli_query($conn, "SELECT * FROM kalimantan");

// Hapus data
if (isset($_GET['delete_kalimantan'])) {
    $id = intval($_GET['delete_kalimantan']);
    $query = "DELETE FROM kalimantan WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 'Data berhasil dihapus';
    } else {
        echo 'Gagal menghapus data';
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Pulau Kalimantan</title>
    <link rel="stylesheet" href="adminStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function deleteData(id) {
            if (confirm("Yakin ingin menghapus data ini?")) {
                $.ajax({
                    url: "admin kalimantan.php",
                    type: "GET",
                    data: { delete_kalimantan: id },
                    success: function (response) {
                        $('#kalimantan-' + id).remove();
                    },
                    error: function () {
                        alert("Terjadi kesalahan saat menghapus data.");
                    }
                });
            }
        }
    </script>
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

        <main class="main-content">
            <header>
                <h1>Data Pulau Kalimantan</h1>
                <a href="tambah kalimantan.php" class="add-btn">Tambah Data</a>
            </header>

            <section class="content">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tempat</th>
                            <th>Keterangan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        while ($data = mysqli_fetch_assoc($kalimantan)) { ?>
                            <tr id="kalimantan-<?= $data['id']; ?>">
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($data['tempat']); ?></td>
                                <td><?= htmlspecialchars($data['keterangan']); ?></td>
                                <td><img src="upload/<?= htmlspecialchars($data['gambar']); ?>" alt="Gambar" width="100">
                                </td>
                                <td>
                                    <a href="edit kalimantan.php?edit_kalimantan=<?= $data['id']; ?>"
                                        class="table-btn edit-btn">Edit</a>
                                    <a href="javascript:void(0);" class="table-btn delete-btn"
                                        onclick="deleteData(<?= $data['id']; ?>)">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>

</html>
