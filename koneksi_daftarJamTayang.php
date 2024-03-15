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

// Tangkap data dari formulir
$id_teater = $_POST['IDteater'];
$jamtayang = $_POST['jamtayang'];

// Query untuk menyimpan data ke tabel jam_tayang
$sql = "INSERT INTO jam_tayang (id_teater, jam) VALUES ('$id_teater', '$jamtayang')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil disimpan.'); window.location.href = 'daftarJamTayang.php';</script>";
} else {
    echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
}

// Tutup koneksi
$conn->close();
?>
