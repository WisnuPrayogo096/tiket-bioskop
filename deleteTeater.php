<?php
// Koneksi ke database
$link = @mysqli_connect("localhost", "root", "", "pbw");

// Periksa koneksi
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter "id" diterima dari URL
if (isset($_GET['id'])) {
    $no = $_GET['id'];

    // Lakukan operasi DELETE dari database berdasarkan no tertentu
    $query = "DELETE FROM listteater WHERE no = $no";

    // Eksekusi query
    if (mysqli_query($link, $query)) {
        // Jika berhasil dihapus, tampilkan pesan alert dan redirect pengguna
        echo '<script>alert("Data Teater Telah Berhasil di Hapus");</script>';
        echo '<script>window.location.href = "dataTeater.php";</script>';
        exit();
    } else {
        // Jika terjadi kesalahan dalam eksekusi query
        echo '<script>alert("Data Teater Tidak Berhasil di Hapus");</script>';
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
}

// Tutup koneksi
mysqli_close($link);
?>
