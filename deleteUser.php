<?php
    $nama_user = $_POST['delNamaUser']; // Mengambil data nama user dari formulir

    $server = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "pbw";
    $conn = mysqli_connect($server, $user, $pass, $db);

    // Gunakan parameter binding untuk mencegah SQL injection
    $sql = "DELETE FROM user WHERE nama = ?";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $nama_user);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data telah berhasil dihapus');
        document.location.href='dataUser.php'; </script>\n";
    } else {
        echo "<script>alert('Tidak dapat menemukan data');
        document.location.href='dataUser.php'; </script>\n";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>
