<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "cultureway");

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Fungsi untuk redirect berdasarkan role
function redirectUser($role) {
    if ($role === 'admin') {
        header("Location: /CultureWay/Admin/admin.php");
    } elseif ($role === 'user') {
        header("Location: /CultureWay/User/home.php");
    } else {
        header("Location: /CultureWay/User/login.php");
    }
    exit;
}

?>
