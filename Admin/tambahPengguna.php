<?php
session_start();
include "functions.php"; // Pastikan file koneksi sudah benar

// Cek apakah form digunakan untuk edit atau tambah
$edit = false;
if (isset($_GET['edit_user'])) {
    $edit = true;
    $id = intval($_GET['edit_user']);
    $result = mysqli_query($conn, "SELECT * FROM registrasi WHERE id='$id'");
    $user = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;
    $role = $_POST['role'];

    if ($edit) {
        $query = "UPDATE registrasi SET email='$email', fullname='$fullname', role='$role'";
        if ($password) $query .= ", password='$password'";
        $query .= " WHERE id='$id'";
    } else {
        $query = "INSERT INTO registrasi (email, fullname, password, role) VALUES ('$email', '$fullname', '$password', '$role')";
    }
    mysqli_query($conn, $query);
    header('location:admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $edit ? 'Edit Pengguna' : 'Tambah Pengguna' ?></title>
    <link rel="stylesheet" href="admin.css">
    <style>
        /* Styling for centering the form and making it bigger */
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
            max-width: 600px; /* Form width limit */
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

        .form-container input[type="email"],
        .form-container input[type="text"],
        .form-container input[type="password"],
        .form-container select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box; /* Ensure input fields fit with padding */
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
    <h1><?= $edit ? 'Edit Pengguna' : 'Tambah Pengguna' ?></h1>
    <form method="post">
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?= $edit ? htmlspecialchars($user['email']) : '' ?>" required>
        </div>
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="fullname" value="<?= $edit ? htmlspecialchars($user['fullname']) : '' ?>" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" <?= $edit ? '' : 'required' ?>>
        </div>
        <div>
            <label>Role</label>
            <select name="role" required>
                <option value="admin" <?= $edit && $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="user" <?= $edit && $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
            </select>
        </div>
        <button type="submit"><?= $edit ? 'Simpan' : 'Tambah' ?></button>
    </form>
</div>
</body>
</html>