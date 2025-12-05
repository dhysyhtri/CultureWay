<?php
$host = 'localhost';
$dbname = 'cultureway';
$username = 'root';
$password = '';
$conn = new mysqli($host,$username,$password,$dbname);

$tujuan = isset($_GET['tujuan']) ? urldecode($_GET['tujuan']) : 'Belum Memilih Tujuan';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id_pemesan = $_POST["id_pemesan"];    
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $destinasi =  $_POST["destinasi"];
    $ticket_date = $_POST["ticket_date"];
    $ticket_quantity = $_POST["ticket_quantity"];
    $ticket_price = $_POST["ticket_price"];
    $total_price = $_POST["total_price"];
    
    $harga_destinasi = [
    "Keraton Yogyakarta"=> 30000,
    "Candi Borobudur"=> 50000,
    "Candi Prambanan" => 50000,
    "Taman Sari" => 20000,
    "Kota Lama" => 10000,
    "Lawang Sewu" => 30000,
    "Museum Tompoe Doeloe" => 30000,
    "Kampung Warna Warni" => 35000,
    "Keraton Surakarta" => 30000,
    "Pasar Klewer" => 50000,
    "Museum Batik Danar Hadi" => 350000,
    "Keraton Kanoman" => 10000,
    "Keraton Kasepuhan" => 75000,
    "Museum Nasional" => 50000,
    "Museum Tsunami Aceh" => 20000,
    "Istana Maimun" => 10000,
    "Museum Kerajaan Sriwijaya" => 20000,
    "Museum Adityawarman" => 20000,
    "Masjid Raya Baiturrahman" => 20000,
    "Desa Pariangan" => 35000,
    "Istana Basa Pagaruyung" => 30000,
    "Desa Adat Miau Baru" => 25000,
    "Desa Budaya Pampang" => 25000,
    "Museum Lambung Mangkurat" => 20000,
    "Keraton Banjar" => 40000,
    "Pasar Terapung Lok Baintan" => 10000,
    "Museum Mulawarman" => 20000,
    "Keraton Matan" => 10000,
    "Rumah Adat Tongkonan" => 15000,
    "Upacara Rambu Solo" => 5000,
    "Festival Palu Namoni" => 50000,
    "Museum Negeri Sulawesi Selatan" => 5000,
    "Banteng Rotterdam" => 30000,
    "Lamin Bendi" => 20000,
    "Taman Imbi" => 10000,
    "Danau Sentani" => 30000,
    "Kawasan Suku Asmat" => 50000,
    "Festival Lembah Baliem" => 60000,
    "Pantai Base-G" => 30000,
    "Kota Ransiki" => 10000,
    "Pulau Biak" => 20000,
    "Desa Tobati" => 10000,
    "Pura Ulun Bratan" => 80000,
    "Tanah Lot" => 80000,
    "Ubud Monkey Forest" => 50000,
    "Pura Besakih" => 50000,
    "Museum Bali" => 100000,
    "Goa Gajah" => 25000,
    "Taman Saraswati" => 10000,
    "Pertunjukan Tari Kecak" => 150000,
    "Desa Sade" => 20000,
    "Desa Sukarara" => 20000,
    "Pantai Kuta" => 20000,
    "Masjid Kuno Bayan" => 10000,
    "Gili Trawangan" => 564000,
    "Pusuk Monkey Forest" => 60000,
    "Taman Mayura" => 10000,
    "Pusat Kerajinan Gerabah" => 10000, 
    ];
    if (isset($harga_destinasi[$destinasi])) {
        $ticket_price = $harga_destinasi[$destinasi];
        $total_price = $ticket_price * $ticket_quantity;
    } else {
        die("Destinasi tidak valid.");
    }


    $virtual_account = rand(1000000000, 9999999999); // Generate virtual account unik
    $ticket_id = "TCKT" . rand(100000, 999999); // Generate ticket ID unik

    $sql = "INSERT INTO pemasanan (id_pemesan, fullname, email, phone_number, destinasi, ticket_date, ticket_quantity, ticket_price, total_price, virtual_account, ticket_id) 
    VALUES ('$id_pemesan', '$fullname', '$email', '$phone_number', '$destinasi', '$ticket_date', '$ticket_quantity', '$ticket_price', '$total_price', '$virtual_account', '$ticket_id')";

    if ($conn->query($sql) == TRUE) {
        $last_id = $conn->insert_id; // Ambil ID pemesanan yang baru saja dibuat
        header("Location: pembayaran.php?id_pemesan=$last_id");
        exit; // Pastikan script berhenti setelah pengalihan
    } else {
        echo "Error: " . $conn->error;
    }

}
$conn->close()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan | CultureWay</title>
    <link rel="shortcut icon" href="CultureWay.jpg" type="image/x-icon">
    <link rel="stylesheet" href="pemasanan.css">
</head>
<body>
    <form action="pemasanan.php" method="post">
        <!-- Informasi Pengunjung -->
        <h2>Informasi Pengunjung</h2>
        
        <label for="fullname">Nama Lengkap:</label><br>
        <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama lengkap" required><br><br>
    
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required><br><br>
    
        <label for="phone_number">Nomor Telepon:</label><br>
        <input type="tel" id="phone_number" name="phone_number" placeholder="Masukkan nomor telepon" required><br>
        <br>
        <!-- Informasi Tiket -->
        <h2>Informasi Tiket</h2>
        
        <label for="destinasi">Tujuan Wisata:</label><br>
        <input list="destinasi-options" id="destinasi" name="destinasi" value="<?php echo htmlspecialchars($tujuan); ?>" readonly><br>
        <datalist id="destinasi-options">
                <option value="Keraton Yogyakarta, Yogyakarta">
                <option value="Candi Borobudur, Yogyakarta">
                <option value="Candi Prambanan, Yogyakarta">
                <option value="Taman Sari, Yogyakarta">
                <option value="Kota Lama, Yogyakarta">
                <option value="Lawang Sewu, Semarang">
                <option value="Museum Malang Tompoe Doeloe, Malang">
                <option value="Kampung Warna Warni,Malang">
                <option value="Keraton Surakarta, Surakarta">
                <option value="Pasar Klewer, Surakarta">
                <option value="Museum Batik Danar Hadi, Surakarta">
                <option value="Keraton Kanoman, Cirebon">
                <option value="Keraton Kasepuhan, Cirebon">
                <option value="Museum Nasional, Jakarta">
                <option value="Museum Tsunami Aceh, Banda Aceh">
                <option value="Istana Maimun, Medan">
                <option value="Museum Kerajaan Sriwijaya, Palembang">
                <option value="Museum Adityawarman, Padang">
                <option value="Masjid Raya Baiturrahman, Banda Aceh">
                <option value="Desa Pariangan, Tanah Datar">
                <option value="Istana Basa Pagaruyung, Tanah Datar">
                <option value="Desa Adat Miau Baru, Kutai Timur">
                <option value="Desa Budaya Pampang, Samarinda">
                <option value="Museum Lambung Mangkurat, Banjarmasin">
                <option value="Keraton Banjar, Martapura">
                <option value="Pasar Terapung Lok Baintan, Banjarmasin">
                <option value="Museum Mulawarman, Samarinda">
                <option value="Keraton Matan">
                <option value="Rumah Adat Tongkonan, Toraja">
                <option value="Upacara Rambu Solo, Toraja">
                <option value="Festival Palu Namoni, Palu">
                <option value="Museum Negeri Sulawesi Selatan, Makassar">
                <option value="Banteng Rotterdam, Makassar">
                <option value="Lamin Bendi, Sulawesi">
                <option value="Taman Imbi, Jayapura">
                <option value="Danau Sentani, Jayapura">
                <option value="Kawasan Suku Asmat, Papua Selatan">
                <option value="Festival Lembah Baliem, Wamena">
                <option value="Pantai ase-G, Jayapura">
                <option value="Kota Ransiki, Papua Barat">
                <option value="Pulau Biak, Papua">
                <option value="Desa Tobati, Jayapura">
                <option value="Pura Ulun Bratan, Bali">
                <option value="Tanah Lot, Bali">
                <option value="Ubud Monkey Forest, Bali">
                <option value="Pura Besakih, Bali">
                <option value="Museum Bali, Denpasar">
                <option value="Goa Gajah, Bali">
                <option value="Taman Saraswati, Ubud">
                <option value="Pertunjukan Tari Kecak, Uluwatu">
                <option value="Desa Sade, Lombok Tengah">
                <option value="Desa Sukarara, Lombok Tengah">
                <option value="Pantai Kuta, Lombok">
                <option value="Masjid Kuno Bayan, Lombok Utara">
                <option value="Gili Trawangan, Lombok Utara">
                <option value="Pusuk Monkey Forest, Lombok Utara">
                <option value="Taman Mayura, Mataram">
                <option value="Pusat Kerajinan Gerabah">
            </datalist>
        <br> <br>
    
        <label for="ticket_date">Tanggal Wisata:</label><br>
        <input type="date" id="ticket_date" name="ticket_date" required><br><br>
        
        <label for="ticket_quantity">Jumlah Tiket:</label><br>
        <input type="number" id="ticket_quantity" name="ticket_quantity" required><br><br>
        
        <label for="ticket_price">Harga Tiket (per tiket):</label><br>
        <input type="text" id="ticket_price" name="ticket_price" readonly><br><br>

        <label for="total_price">Total Harga</label><br>
        <input type="text" id="total_price" name="total_price" readonly><br><br>
    
        <!-- Informasi Pembayaran -->
        <h2>Informasi Pembayaran</h2>
                <label for="transfer_bank">Virtual Account</label>
            <select>
                <option value="bca">BCA</option>
                <option value="bni">BNI</option>
                <option value="bri">BRI</option>
                <option value="mandiri">Mandiri</option>
                <option value="bsi">BSI</option>
                <option value="btn">BTN</option>
            </select>
        <br>
        <input type="submit" value="Pesan Sekarang">
    </form> 
    <script src="pemasanan.js"></script> 
</body>
</html> 