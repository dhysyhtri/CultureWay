
    // Harga tiket berdasarkan destinasi
    const hargaDestinasi = {
    "Keraton Yogyakarta": 30000,
    "Candi Borobudur": 50000,
    "Candi Prambanan" : 50000,
    "Taman Sari" : 20000,
    "Kota Lama" : 10000,
    "Lawang Sewu" : 30000,
    "Museum Tompoe Doeloe": 30000,
    "Kampung Warna Warni" : 35000,
    "Keraton Surakarta" : 30000,
    "Pasar Klewer" : 50000,
    "Museum Batik Danar Hadi" : 350000,
    "Keraton Kanoman" : 10000,
    "Keraton Kasepuhan" : 75000,
    "Museum Nasional" : 50000,
    "Museum Tsunami Aceh" : 20000,
    "Istana Maimun" : 10000,
    "Museum Kerajaan Sriwijaya" : 20000,
    "Museum Adityawarman" : 20000,
    "Masjid Raya Baiturrahman" : 20000,
    "Desa Pariangan" : 35000,
    "Istana Basa Pagaruyung" : 30000,
    "Desa Adat Miau Baru" : 25000,
    "Desa Budaya Pampang" : 25000,
    "Museum Lambung Mangkurat" : 20000,
    "Keraton Banjar" : 40000,
    "Pasar Terapung Lok Baintan" : 10000,
    "Museum Mulawarman" : 20000,
    "Keraton Matan" : 10000,
    "Rumah Adat Tongkonan" : 15000,
    "Upacara Rambu Solo" : 5000,
    "Festival Palu Namoni" : 50000,
    "Museum Negeri Sulawesi Selatan" : 5000,
    "Banteng Rotterdam" : 30000,
    "Lamin Bendi" : 20000,
    "Taman Imbi" : 10000,
    "Danau Sentani" : 30000,
    "Kawasan Suku Asmat" : 50000,
    "Festival Lembah Baliem" : 60000,
    "Pantai Base-G" : 30000,
    "Kota Ransiki" : 10000,
    "Pulau Biak" : 20000,
    "Desa Tobati" : 10000,
    "Pura Ulun Bratan" : 80000,
    "Tanah Lot" : 80000,
    "Ubud Monkey Forest" : 50000,
    "Pura Besakih" : 50000,
    "Museum Bali" : 100000,
    "Goa Gajah" : 25000,
    "Taman Saraswati" : 10000,
    "Pertunjukan Tari Kecak" : 150000,
    "Desa Sade" : 20000,
    "Desa Sukarara" : 20000,
    "Pantai Kuta" : 20000,
    "Masjid Kuno Bayan" : 10000,
    "Gili Trawangan" : 564000,
    "Pusuk Monkey Forest" : 60000,
    "Taman Mayura" : 10000,
    "Pusat Kerajinan Gerabah" : 10000,  
    };

    // Fungsi untuk mengupdate harga tiket dan total harga
    function updateHarga() {
        const destinasiInput = document.getElementById("destinasi").value;
        const jumlahTiket = document.getElementById("ticket_quantity").value || 0;
        const hargaTiket = hargaDestinasi[destinasiInput] || 0; // Ambil harga tiket berdasarkan destinasi

        // Update harga tiket dan total harga
        document.getElementById("ticket_price").value = hargaTiket;
        document.getElementById("total_price").value = hargaTiket * jumlahTiket;
    }

    // Event listener untuk input jumlah tiket dan destinasi
    document.getElementById("destinasi").addEventListener("change", updateHarga);
    document.getElementById("ticket_quantity").addEventListener("input", updateHarga);

