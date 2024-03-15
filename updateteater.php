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

// Tangkap data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_teater = $_POST["namateater"];
    $mall = $_POST["namamall"];
    $alamat = $_POST["alamat"];
    $link = $_POST["link"];
    $telp = $_POST["telp"];

    // Get the ID from the URL
    $no = $_GET["id"];

    // Update data in the database
    $sql = "UPDATE listteater SET nama_teater='$nama_teater', mall='$mall', alamat='$alamat', link='$link', telp='$telp' WHERE no=$no";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diupdate di database.'); window.location.href = 'dataTeater.php';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
    }    
}

// Tutup koneksi
$conn->close();
?>