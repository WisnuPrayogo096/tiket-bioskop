<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "pbw";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$nama_teater = $_POST['namateater'];
$mall = $_POST['namamall'];
$alamat = $_POST['alamat'];
$link = $_POST['link'];
$telp = $_POST['telp'];

// Query untuk menambahkan data ke tabel listteater
$sql = "INSERT INTO listteater (nama_teater, mall, alamat, link, telp) VALUES ('$nama_teater', '$mall', '$alamat', '$link', '$telp')";

if ($conn->query($sql) === TRUE) {
    // Jika berhasil, kirim pesan alert dan arahkan ke halaman dataTeater.php
    echo "<script>alert('Data berhasil ditambahkan'); window.location.href = 'dataTeater.php';</script>";
} else {
    // Jika gagal, kirim pesan alert dengan pesan error
    echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
}

// Tutup koneksi ke database
$conn->close();
?>
