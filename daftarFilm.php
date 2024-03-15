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
    $jpgnya = $_POST["jpgnya"];
    $comments = $_POST["comments"];
    $tanggalrilis = $_POST["tanggalrilis"];

    // Proses upload gambar
    $target_dir = "uploads/"; // Direktori tempat menyimpan gambar
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file gambar valid
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if($check !== false) {
            echo "File adalah gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
    }

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Cek ukuran file max. 2 MB
    if ($_FILES["file"]["size"] > 2 * 1024 * 1024) {
        echo "Maaf, file terlalu besar.";
        $uploadOk = 0;
    }

    // Izinkan hanya format gambar tertentu
    if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif" ) {
        echo "Maaf, hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk bernilai 0
    if ($uploadOk == 0) {
        echo "Maaf, file tidak terupload.";
        echo "<script>alert('Maaf, file tidak terupload.');</script>";
    } else {
        // Jika semuanya oke, upload file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "File ". basename( $_FILES["file"]["name"]). " berhasil diupload.";
            echo "<script>alert('File berhasil diupload.');</script>";

            // Masukkan data ke dalam database
            $sql = "INSERT INTO tools_gallery (gambar, tanggal, keterangan, link) VALUES ('$target_file', '$tanggalrilis', '$namafilm', '$comments')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Data berhasil disimpan ke database.";
                echo '<script>window.location.href = "dataGallery.php";</script>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.";
            echo "<script>alert('Maaf, terjadi kesalahan saat mengupload file.');</script>";
        }
    }
}

// Tutup koneksi
$conn->close();
?>
