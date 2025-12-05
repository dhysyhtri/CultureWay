<?php
session_start();

// Include file koneksi database
include "../User/functions.php"; // Sesuaikan path sesuai lokasi file functions.php

// Cek apakah user sudah login dan memiliki role admin
if (!isset($_SESSION['registrasi']) || $_SESSION['registrasi']['role'] !== 'admin') {
    header("Location: /CultureWay/User/login.php");
    exit;
}

// Pastikan koneksi database tersedia
if (!$conn) {
    die("Koneksi database gagal!");
}

// Ambil semua data user
$users = mysqli_query($conn, "SELECT * FROM registrasi");

if (!$users) {
    die("Query gagal: " . mysqli_error($conn));
}

// Hapus User
if (isset($_GET['delete_user'])) {
    $id = intval($_GET['delete_user']);
    $query = "DELETE FROM registrasi WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 'User berhasil dihapus';
    } else {
        echo 'Gagal menghapus user';
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Pengguna</title>
    <link rel="stylesheet" href="adminStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function deleteUser(id) {
            if (confirm("Yakin ingin menghapus user ini?")) {
                $.ajax({
                    url: "admin.php",
                    type: "GET",
                    data: { delete_user: id },
                    success: function(response) {
                        $('#user-' + id).remove();
                    },
                    error: function() {
                        alert("Terjadi kesalahan saat menghapus user.");
                    }
                });
            }
        }
    </script>
</head>

<body>
    <div class="admin-container">
        <aside class="sidebar">
            <div class="logo">
                <h2>Pariwisata Admin</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="admin.php" class="active">Pengguna</a></li>
                    <li><a href="adminDestinasi.php">Destinasi</a></li>
                    <li><a href="adminEvent.php">Event</a></li>
                    <li><a href="adminArtCulture.php">Art & Culture</a></li>
                    <li><a href="adminBlog.php">Blog</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header>
                <h1>Data Pengguna</h1>
                <a href="tambahPengguna.php" class="add-btn">Tambah Pengguna</a>
            </header>

            <section class="content">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Nama Lengkap</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        while ($user = mysqli_fetch_assoc($users)) { ?>
                            <tr id="user-<?= $user['id']; ?>">
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($user['email']); ?></td>
                                <td><?= htmlspecialchars($user['fullname']); ?></td>
                                <td><?= htmlspecialchars($user['password']); ?></td>
                                <td><?= htmlspecialchars($user['role']); ?></td>
                                <td>
                                    <a href="adminEditPengguna.php?edit_user=<?= $user['id']; ?>" class="table-btn edit-btn">Edit</a>
                                    <a href="javascript:void(0);" class="table-btn delete-btn" onclick="deleteUser(<?= $user['id']; ?>)">Hapus</a>
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