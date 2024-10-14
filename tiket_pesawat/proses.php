<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $asal = htmlspecialchars($_POST['asal']);
        $tujuan = htmlspecialchars($_POST['tujuan']);
        $tanggal = htmlspecialchars($_POST['tanggal']);

        // Buat string data pemesanan
        $data = "Nama: $nama, Asal: $asal, Tujuan: $tujuan, Tanggal: $tanggal\n";

        // Simpan data ke file
        file_put_contents('pemesanan.txt', $data, FILE_APPEND | LOCK_EX);

        // Tampilkan konfirmasi
        echo "<h1>Konfirmasi Pemesanan Tiket</h1>";
        echo "<p>Nama Penumpang: $nama</p>";
        echo "<p>Kota Asal: $asal</p>";
        echo "<p>Kota Tujuan: $tujuan</p>";
        echo "<p>Tanggal Pemesanan: $tanggal</p>";
        echo "<p>Terima Kasih Telah Memesan Tiket Pesawat</p>";
    } else {
        echo "Data tidak valid";
    }

?>