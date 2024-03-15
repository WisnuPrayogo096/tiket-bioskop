<?php
session_start();
$SN = $_SESSION["NO"];
$USER = $_SESSION["username"];
include "connect.php";
require_once './vendor/autoload.php'; // Sesuaikan path autoload.php jika diperlukan

use TCPDF as TCPDF;

// Create instance of PDF class
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Ticket Information');
$pdf->SetSubject('Ticket Details');
$pdf->SetKeywords('Ticket, Information, PDF');

$pdf->SetMargins(10, 10, 10);
$pdf->SetFont('helvetica', '', 12);

$snQuery = "SELECT * FROM pemesanan WHERE no='$SN';";
$userQuery = "SELECT * FROM user WHERE user='$USER';";

$snResult = $conn->query($snQuery);
$userResult = $conn->query($userQuery);

if ($snResult && $userResult) {
    $snData = mysqli_fetch_array($snResult);
    $userData = mysqli_fetch_array($userResult);

    $tempat = $snData["tempat"];
    $judul = $snData["judul"];
    $nokursi = $snData["sheet"];
    $hari = $snData["hari"];
    $harga = 'Rp.25.000,00';

    // Create PDF content
    $content = "
        Nama Lengkap: {$userData['nama']}
        User Name: {$USER}
        Email: {$userData['email']}
        HP: {$userData['hp']}
        Alamat: {$userData['alamat']}
        NO SN: " . crc32($SN) . "
        Tempat Teater: {$tempat}
        Judul Film: {$judul}
        Harga Tiket: {$harga}
        No Kursi: {$nokursi}
        Hari: {$hari}
    ";

    // Add a page
    $pdf->AddPage();
    // Output the text
    $pdf->Write(0, $content, '', 0, 'L', true, 0, false, false, 0);

    // Close and output PDF
    $pdf->Output('ticket_information.pdf', 'I');
} else {
    echo "Error fetching data from the database.";
}
?>
