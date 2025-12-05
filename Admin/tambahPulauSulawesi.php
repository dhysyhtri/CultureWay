<?php
session_start();
include "functions.php"; // Pastikan file koneksi sudah benar

// Cek apakah form digunakan untuk edit atau tambah
$edit = false;
if (isset($_GET['edit_data'])) {
    $edit = true;
    $id = intval($_GET['edit_data']);
    $result = mysqli_query($conn, "SELECT * FROM sulawesi WHERE id='$id'");
    $data = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $tempat = mysqli_real_escape_string($conn, $_POST['tempat']);
    $keterangan = mysqli_real_escape_string($conn, $_POST['keterangan']);
    $gambar_upload_path = $edit ? $data['gambar'] : null;

    // Proses upload gambar
    if (!empty($_FILES['gambar']['name'])) {
        $gambar = $_FILES['gambar']['name'];
        $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
        $gambar_ext = pathinfo($gambar, PATHINFO_EXTENSION);
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array(strtolower($gambar_ext), $allowed_ext)) {
            // Tentukan lokasi penyimpanan file gambar
            $gambar_upload_path = 'upload/' . uniqid() . '.' . $gambar_ext;
            if (!is_dir('upload')) {
                mkdir('upload', 0777, true); // Buat folder jika belum ada
            }
            if (!move_uploaded_file($gambar_tmp_name, $gambar_upload_path)) {
                echo "Gagal menyimpan file gambar.";
                exit;
            }
        } else {
            echo "Ekstensi file tidak diizinkan. Hanya file JPG, JPEG, PNG, GIF yang diperbolehkan.";
            exit;
        }
    }

    // Proses penyimpanan ke database
    if ($edit) {
        $query = "UPDATE sulawesi SET tempat='$tempat', keterangan='$keterangan', gambar='$gambar_upload_path' WHERE id='$id'";
    } else {
        $query = "INSERT INTO sulawesi (tempat, keterangan, gambar) VALUES ('$tempat', '$keterangan', '$gambar_upload_path')";
    }

    if (mysqli_query($conn, $query)) {
        header('location:admin.php');
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $edit ? 'Edit Data Pulau Sulawesi' : 'Tambah Data Pulau Sulawesi' ?></title>
    <link rel="stylesheet" href="admin.css">
    <style>
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
            max-width: 600px;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
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
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-container textarea {
            resize: none;
            height: 150px;
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
</head>
<body>
<div class="form-container">
    <h1><?= $edit ? 'Edit Data Pulau Sulawesi' : 'Tambah Data Pulau Sulawesi' ?></h1>
    <form method="post" enctype="multipart/form-data">
        <div>
            <label>Tempat</label>
            <input type="text" name="tempat" value="<?= $edit ? htmlspecialchars($data['tempat']) : '' ?>" required>
        </div>
        <div>
            <label>Keterangan</label>
            <textarea name="keterangan" rows="6" required><?= $edit ? htmlspecialchars($data['keterangan']) : '' ?></textarea>
        </div>
        <div>
            <label>Gambar</label>
            <input type="file" name="gambar" <?= $edit ? '' : 'required' ?>>
            <?php if ($edit && $data['gambar']): ?>
                <p>Gambar saat ini: <img src="<?= $data['gambar'] ?>" alt="Current image" width="100"></p>
            <?php endif; ?>
        </div>
        <button type="submit"><?= $edit ? 'Simpan' : 'Tambah' ?></button>
    </form>
</div>
</body>
</html>
