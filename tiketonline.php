<?php
  session_start();
  if($_SESSION['LOGIN'] != 'OK'){
  header('location: indexs.php');
  }
  $namanya=$_SESSION["nama"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />
</head>
<script>
    function getCekJam() {
        var selectedTempat = document.getElementById("tempat").value;

        if (selectedTempat !== "") {
            // Split value untuk mendapatkan no teater
            var noTeater = selectedTempat.split("-")[0];

            // Menggunakan Ajax untuk mengambil jam tayang berdasarkan no teater
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    // Mengisi dropdown jam tayang dengan data dari server
                    document.getElementById("jam").innerHTML = this.responseText;
                }
            };
            xhr.open("GET", "get_jam_tayang.php?no_teater=" + noTeater, true);
            xhr.send();
        } else {
            // Reset dropdown jam tayang jika tempat teater tidak dipilih
            document.getElementById("jam").innerHTML = '<option value="">Pilih jam tayang</option>';
        }
    }
</script>
<body style="background-image: url(images/3d.jpg);">
<?php
// Koneksi ke database
include "include/conn.php";

// Ambil judul film dari database
$sql = "SELECT keterangan FROM tools_gallery";
$sql2 = "SELECT no, nama_teater, mall FROM listteater";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
?>
<div id="wrapper">
<div id="header" style="background-image: url(images/p.png);"></div>
<div id="menu">

<?php
 $menu=1;
 include "topmenu.php";
?>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><h2>Selamat Datang <?php echo "$namanya"; ?><br><br>Silahkan Mengisi Form Berikut untuk Pesan Tiket</h2>

<form method="post" action="pesanan.php" name="formdaftar">
<center><img src="images/sheet.jpg" width="450px" height="350px"></center><br><br><br>
<table>
<tr>
    <td>Pilih tempat teater</td>
    <td>:</td>
    <td>
        <select name="tempat" id="tempat" required>
            <option value="" disabled selected>Pilih tempat teater</option>
            <?php
            // Isi daftar dropdown dengan tempat teater
            while ($row = $result2->fetch_assoc()) {
                echo '<option value="' . $row['no'] . '-' . $row['nama_teater'] .  '">' . $row['no'] . ' - ' . $row['nama_teater'] . ' - ' . $row['mall'] . '</option>';
            }
            ?>
        </select>
        <button type="button" onclick="getCekJam()">Cek</button>
    </td>
</tr>
<tr><td>Pesan untuk hari</td> <td>:</td><td>
<select name="hari">
<option value="Senin">Senin</option>
<option value="Selasa">Selasa</option>
<option value="Rabu">Rabu</option>
<option value="Kamis">Kamis</option>
<option value="Jumat">Jum'at</option>
<option value="Sabtu">Sabtu</option>
<option value="Minggu">Minggu</option>
</select></td></tr>
<tr><td>Pilih judul film</td><td>:</td><td>
<select name="film" required>
<option value="" disabled selected>Pilih judul film
                <?php
                // Isi daftar dropdown dengan judul film
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['keterangan'] . '">' . $row['keterangan'] . ' (HTM: 25000)</option>';
                }
                ?></option>
</select></td></tr>
<tr>
    <td>Pilih jam tayang</td>
    <td>:</td>
    <td>
        <select name="jam" id="jam" required>
            <option value="" disabled selected>Pilih jam tayang</option>
        </select>
    </td>
</tr>
<tr><td>Pilih sheet tempat duduk  </td><td>:</td><td><b>BARIS</b>&nbsp;:
<select name="baris"><option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
<option value="I">I</option>
<option value="J">J</option>
<option value="K">K</option>
<option value="L">L</option>>
</select>&nbsp;
<b>KOLOM</b>&nbsp;:<select name="kolom">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
</select>
</td></tr>
<tr>
    <td>Pilih metode pembayaran</td>
    <td>:</td>
    <td>
        <select name="metode_pembayaran" required>
            <option value="" disabled selected>Pilih metode pembayaran</option>
            <option value="E-Wallet">E-Wallet</option>
            <option value="Tunai">Tunai</option>
        </select>
    </td>
</tr>
</table>
<br>
<table valign="right"><tr><td><input type="submit" name="simpan" value="Submit"></td><td><input type="reset" value="Reset"></td></tr>
</table><br>
  
</form>
</div>
</div>
<div id="rightcontent"><strong>Cari Di Website </strong><br/>
	  <form id="searchthis" action="http://google.co.id/search" style="display:inline;" method="get">
	  <input id="b-query" maxlength="255" name="q" size="17" type="text"/>
	  <input id="b-searchbtn" value="Search" type="submit"/>
	  </form>
	  <hr/>
	  <center><br/>
	  <i><font color="#666666" face="verdana"><strong>Powered By <br/>TIKETBIOSKOP.COM</strong></font></i></center>
	  <br/><br/>
</div>
<div id="clearer"></div>
<div id="footer"></div>
</div>
</body>
</html>

