<?php
session_start();
include "../Admin/functions.php"; // Menghubungkan ke database dan fungsi redirectUser

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mendapatkan data dari form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Query untuk mengambil data user berdasarkan email
    $query = "SELECT * FROM registrasi WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Ambil data user
        $data = mysqli_fetch_assoc($result);

        // Verifikasi password
        if (password_verify($password, $data['password'])) {
            // Set session
            $_SESSION['registrasi'] = $data;

            // Redirect menggunakan fungsi redirectUser
            redirectUser($data['role']);
        } else {
            echo '<script>alert("Password salah.");</script>';
        }
    } else {
        echo '<script>alert("Email belum terdaftar.");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-page">
        <div class="background-image"></div>
        <div class="login-form-container">
            <h1 class="logo">CultureWay</h1>
            <h2 class="welcome-text">Welcome Back!</h2>
            <form method="post">
                <input type="email" class="input-field" placeholder="E-mail" name="email" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <div class="form-options">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
            <p class="signup-text">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>