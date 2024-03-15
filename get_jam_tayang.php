<?php
include "include/conn.php";

if (isset($_GET['no_teater'])) {
    $noTeater = $_GET['no_teater'];

    $sql = "SELECT id, jam FROM jam_tayang WHERE id_teater = $noTeater";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['jam'] . '">' . $row['jam'] . '</option>';
        }
    } else {
        echo '<option value="">Tidak ada jam tayang</option>';
    }
}
?>
