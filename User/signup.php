<?php
session_start();
include "functions.php"; // Pastikan koneksi sudah benar di sini
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up | CultureWay</title>
    <link rel="shortcut icon" href="CultureWay.jpg" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
    if (isset($_POST['email'])) {
        global $conn;

        // Mendapatkan data dari form
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        // Validasi password
        if ($password !== $password2) {
            echo '<script>
                    alert("Konfirmasi password tidak sesuai");
                </script>';
        } else {
            // Hashing password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Query untuk insert data ke database
            $query = "INSERT INTO registrasi (email, fullname, password) VALUES ('$email', '$fullname', '$hashedPassword')";

            // Eksekusi query
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo '<script>
                        alert("Signup berhasil, silahkan Login");
                        location.href="login.php";
                    </script>';
            } else {
                echo '<script>
                        alert("Signup gagal: ' . mysqli_error($conn) . '");
                    </script>';
            }
        }
    }
    ?>

    <div class="login-page">
        <div class="background-image"></div>
        <div class="login-form-container">
            <h1 class="logo">CultureWay</h1>
            <h2 class="welcome-text">Hello, Welcome!</h2>
            <form method="post">
                <input type="email" class="input-field" placeholder="E-mail" name="email" required>
                <input type="text" class="input-field" placeholder="Full Name" name="fullname" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <input type="password" class="input-field" placeholder="Confirm Password" name="password2" required>
                <button type="submit" name="register" class="login-btn">Sign Up</button>
            </form>
            <p class="signup-text">Do have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>