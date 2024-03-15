<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "pbw";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$id = $_GET["id"];
$id_teater = $_POST["id_teater"];
$jam = $_POST["jam"];

// Jalankan perintah UPDATE
$sql = "UPDATE jam_tayang SET id_teater='$id_teater', jam='$jam' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil diperbarui.'); window.location.href = 'dataJamTayang.php';</script>";
} else {
    echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
}

// Tutup koneksi
$conn->close();
?>
