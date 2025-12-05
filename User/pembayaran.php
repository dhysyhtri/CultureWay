<?php
$host = 'localhost';
$dbname = 'cultureway';
$username = 'root';
$password = '';
$conn = new mysqli($host, $username, $password, $dbname);

if (isset($_GET['id_pemesan'])) {
    $id_pemesan = intval($_GET['id_pemesan']); // Pastikan angka

    $sql = "SELECT * FROM pemasanan WHERE id_pemesan = '$id_pemesan'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Error in SQL: " . $conn->error); // Menampilkan error query
    }

    if ($result->num_rows > 0) {
        $order = $result->fetch_assoc();
        $fullname = $order['fullname']; 
        $virtual_account = rand(1000000000, 9999999999); // Simulasi Virtual Account
        $ticket_id = "TCKT" . rand(100000, 999999);
        $total_price = $order['total_price'];
    } else {
        die("Pemesanan tidak ditemukan!"); // Jika data tidak ditemukan
    }
} else {
    die("ID Pemesanan tidak diberikan!");
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan | CultureWay</title>
    <link rel="shortcut icon" href="CultureWay.jpg" type="image/x-icon">
    <link rel="stylesheet" href="pembayaran.css">
</head>
<body>
    <div class="container">
        <h1>Pembayaran Tiket</h1>
        <h2>Informasi Virtual Account</h2>
        <div class="box">
        <div class="virtual-account-container">
            <input type="text" id="virtualAccount" value="<?= $virtual_account; ?>" readonly>
            <button class="copy-btn" onclick="copyVirtualAccount()">Salin</button>
        </div>
        <p class="total-payment">
            Total Pembayaran: <strong>Rp <?= number_format($total_price, 0, ',', '.'); ?></strong>
        </p>        
    </div>

        <button class="button" onclick="confirmPayment()">Konfirmasi Pembayaran</button>
        <div id="ticket" style="display: none;">
            <h3>Tiket Anda</h3>
            <p>Nama: <strong><?= $fullname; ?></strong></p>
            <p><strong>ID Tiket:</strong> <?= $ticket_id; ?></p>
            <p>Terima kasih telah melakukan pembayaran.</p>
        </div>
    </div>

    <script src="pembayaran.js"></script> 
</body>
</html>
