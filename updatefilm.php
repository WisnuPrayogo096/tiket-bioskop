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
    $namafilm = $_POST["namafilm"];
    $comments = $_POST["comments"];
    $tanggalrilis = $_POST["tanggalrilis"];

    // Get the ID from the URL
    $id_gallery = $_GET["id"];

    // Update data in the database
    $sql = "UPDATE tools_gallery SET tanggal='$tanggalrilis', keterangan='$namafilm', link='$comments' WHERE id_gallery=$id_gallery";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diupdate di database.'); window.location.href = 'dataGallery.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>