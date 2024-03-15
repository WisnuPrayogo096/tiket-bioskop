<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-image: url(images/3d.jpg);">
<div id="wrapper">
<div id="header" style="background-image: url(images/p.png);"></div>
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

// Ambil ID dari parameter URL
$no = $_GET["id"];

// Jalankan kueri SQL untuk mendapatkan data berdasarkan ID
$sql = "SELECT * FROM listteater WHERE no = $no";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Isi nilai formulir dengan data dari database
    $row = $result->fetch_assoc();
    $nama_teater = $row['nama_teater'];
    $mall = $row['mall'];
    $alamat = $row['alamat'];
    $link = $row['link'];
    $telp = $row['telp'];
} else {
    echo "Data tidak ditemukan.";
}

?>
<div id="menu">
    <ul>
      <li><a href="admin.php">Admin Panel</a></li>
      <li><a href="dataUser.php">Data User</a></li>
      <li><a href="dataPemesanan.php">Pemesanan</a></li>
	  <!-- <li><a href="dataGallery.php">Data Gallery</a></li> -->
      <li><a href="dataTeater.php">Data Theater</a></li>
      <li><a href="daftarTeater.php">Create Theater</a></li>
	<li><a href="indexs.php">Logout</a></li>
    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><hr/>
  <strong><h2>Selamat Datang Admin</h2></strong><br/>
  <form action="updateteater.php?id=<?php echo $no; ?>" method="post" enctype="multipart/form-data">
    <table border="0" align="left">
        <tr>
            <table style="border:2px solid black;">
            <tr>
                    <th colspan="2">
                        Update Theater
                    </th>
                </tr>
                <tr>
                    <td>
                        Nama Theater:
                    </td>
                    <td>
                        <input type="text" size="10" name="namateater" value="<?php echo $nama_teater; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama Mall:
                    </td>
                    <td>
                        <input type="text" size="20" name="namamall" value="<?php echo $mall; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Alamat:
                    </td>
                    <td>
                        <input type="text" size="50" name="alamat" value="<?php echo $alamat; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Link:
                    </td>
                    <td>
                        <input type="text" size="50" name="link" value="<?php echo $link; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telp:
                    </td>
                    <td>
                        <input type="tel" size="15" name="telp" value="<?php echo $telp; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit"><input type="button" value="Back" onclick="window.history.back();">
                    </td>
                </tr>
            </table>
        </tr>
    </table>
</form>
<br>
<br>
</div>
	
</div>

<div id="rightcontent"><strong>Cari Di Website </strong><br/>
	  <form id="searchthis" action="http://www.google.com/search" style="display:inline;" method="get">
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
