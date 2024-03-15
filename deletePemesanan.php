<?php
// Koneksi ke database
$link = @mysqli_connect("localhost", "root", "", "pbw");

// Periksa koneksi
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter "no" diterima dari URL
if (isset($_GET['no'])) {
    $no = $_GET['no'];

    // Lakukan operasi DELETE dari database berdasarkan nomor tertentu
    $query = "DELETE FROM pemesanan WHERE no = $no";

    // Eksekusi query
    if (mysqli_query($link, $query)) {
        // Jika berhasil dihapus, tampilkan pesan alert dan redirect pengguna
        echo '<script>alert("Data Pemesanan Telah Berhasil di Hapus");</script>';
        echo '<script>window.location.href = "dataPemesanan.php";</script>';
        exit();
    } else {
        // Jika terjadi kesalahan dalam eksekusi query
        echo '<script>alert("Data Pemesanan Tidak Berhasil di Hapus");</script>';
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
}

// Tutup koneksi
mysqli_close($link);
?>