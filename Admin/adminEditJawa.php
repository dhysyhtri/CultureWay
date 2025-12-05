<?php
session_start();
include "functions.php"; // Pastikan file koneksi sudah benar

if (isset($_GET['edit_jawa'])) {
    $id = intval($_GET['edit_jawa']);
    $result = mysqli_query($conn, "SELECT * FROM jawa WHERE id='$id'");
    $jawa = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tempat = mysqli_real_escape_string($conn, $_POST['tempat']);
    $keterangan = mysqli_real_escape_string($conn, $_POST['keterangan']);
    $gambar = $_FILES['gambar']['name'];

    // Proses upload gambar jika ada file baru
    if ($gambar) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($gambar);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
    } else {
        $gambar = $jawa['gambar']; // Jika gambar tidak diubah, gunakan gambar lama
    }

    // Update data di database
    $query = "UPDATE jawa SET tempat='$tempat', keterangan='$keterangan', gambar='$gambar' WHERE id='$id'";
    mysqli_query($conn, $query);

    header('location:admin jawa.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pulau Jawa</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="form-container">
    <h1>Edit Data Pulau Jawa</h1>
    <form method="post" enctype="multipart/form-data">
        <div>
            <label>Tempat</label>
            <input type="text" name="tempat" value="<?= htmlspecialchars($jawa['tempat']); ?>" required>
        </div>
        <div>
            <label>Keterangan</label>
            <textarea name="keterangan" rows="5" required><?= htmlspecialchars($jawa['keterangan']); ?></textarea>
        </div>
        <div>
            <label>Gambar</label>
            <input type="file" name="gambar">
            <p>Gambar saat ini: <?= htmlspecialchars($jawa['gambar']); ?></p>
        </div>
        <button type="submit">Simpan</button>
    </form>
</div>

<style>
    /* Styling untuk form yang lebih besar dan terpusat */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        width: 80%;
        max-width: 600px; /* Lebar maksimum form */
        padding: 40px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin: auto;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 24px;
        color: #333;
    }

    .form-container label {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 8px;
        display: block;
        color: #555;
    }

    .form-container input[type="text"],
    .form-container input[type="file"],
    .form-container textarea {
        width: 100%; /* Lebar input sama dengan textarea */
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        box-sizing: border-box;
    }

    /* Atur tinggi textarea untuk lebih besar dibanding input */
    .form-container textarea {
        resize: none; /* Hilangkan opsi resize */
        height: 150px; /* Lebih tinggi dibanding input */
    }

    .form-container button {
        width: 100%;
        padding: 15px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }
</style>
</body>
</html>
