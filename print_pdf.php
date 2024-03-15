<?php
session_start();
$SN = $_SESSION["NO"];
$USER = $_SESSION["username"];
include "include/conn.php";

use Dompdf\Dompdf;
use Dompdf\Options;

require_once "vendor/autoload.php";

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);

$dompdf = new Dompdf($options);

// Mengambil data dari database
$koneksi = new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$sql = "SELECT * FROM pemesanan WHERE no = '$SN'";
$hasil = $koneksi->query($sql);
$r = $hasil->fetch_assoc();

$tempat_parts = explode('-', $r['tempat']);
$lokasi_teater = (count($tempat_parts) > 1) ? trim($tempat_parts[1]) : $r['tempat'];
$judul = $r['judul'];
$nokursi = $r['sheet'];
$hari = $r['hari'];
$jam = $r['jam'];
$harga = 'Rp.25.000,00';

$sqlx = "SELECT * FROM user WHERE user = '$USER'";
$hasilx = $koneksi->query($sqlx);
$d = $hasilx->fetch_assoc();

$data = array(
    'Nama Member' => $d['nama'],
    'Username' => $USER,
    'Email' => $d['email'],
    'HP' => $d['hp'],
    'Alamat' => $d['alamat'],
    'No SN' => crc32($SN),
    'Lokasi Teater' => $lokasi_teater,
    'Judul Film' => $judul,
    'Harga Tiket' => $harga,
    'No Kursi' => $nokursi,
    'Hari' => $hari,
    'Jam' => $jam
);

$koneksi->close();

// Membuat konten HTML dari data dengan penataan rata tengah
$html = '<h1 style="text-align:center;">Detail E-Ticket</h1>';
$html .= '<table border="1" style="margin:auto; text-align:left;">';
foreach ($data as $key => $value) {
    $html .= '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
}
$html .= '</table>';

$dompdf->loadHtml($html);

$dompdf->setPaper("A4", "potrait");

$dompdf->render();

$dompdf->stream('ticket.pdf');
?>