<?php
// Koneksi ke database
$link = @mysqli_connect("localhost", "root", "", "pbw");

// Periksa koneksi
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter "id" diterima dari URL
if (isset($_GET['id'])) {
    $id_gallery = $_GET['id'];

    // Lakukan operasi DELETE dari database berdasarkan id_gallery tertentu
    $query = "DELETE FROM tools_gallery WHERE id_gallery = $id_gallery";

    // Eksekusi query
    if (mysqli_query($link, $query)) {
        // Jika berhasil dihapus, tampilkan pesan alert dan redirect pengguna
        echo '<script>alert("Data Film Telah Berhasil di Hapus");</script>';
        echo '<script>window.location.href = "dataGallery.php";</script>';
        exit();
    } else {
        // Jika terjadi kesalahan dalam eksekusi query
        echo '<script>alert("Data Film Tidak Berhasil di Hapus");</script>';
        echo "Error: " . $query . "<br>" . mysqli_error($link);
    }
}

// Tutup koneksi
mysqli_close($link);
?>
