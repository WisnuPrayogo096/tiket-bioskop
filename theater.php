<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" 
type="text/css" />
</head>
<body style="background-image: url(images/3d.jpg);">
<div id="wrapper">
<div id="header" style="background-image: url(images/p.png);"></div>

<div id="menu">
    <ul>
      <li><a href="indexs.php">Home</a></li>
      <li><a href="theater.php" id="aktif">Theater</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="help.php">Help</a></li>

    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><h2><u style="text-decoration: none;">Lokasi Theater</u></h2>

<!-- ISI LIST TEATER -->
<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "pbw";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel listteater
$sql = "SELECT * FROM listteater";
$result = $conn->query($sql);

// Tampilkan data dalam tabel HTML
echo '<table width="100%"><tbody valign="top" align="center">';
echo '<tr>
        <td style="background-color:#707070; width:100px;"><h3>Theater</h3></td>
        <td style="background-color:#707070; width:100px;"><h3>Alamat</h3></td>
        <td style="background-color:#707070; width:100px;"><h3>Telepon</h3></td>
      </tr>';

// Loop untuk menampilkan setiap baris data dari database
while ($row = $result->fetch_assoc()) {
    echo '<tr>
            <td style="background-color:white; width:100px;"><b>' . $row['nama_teater'] . '</b></td>
            <td style="background-color:white; width:100px;"><b>' . $row['mall'] . '</b><br>' . $row['alamat'] . '<br><a href="' . $row['link'] . '" target="_blank"><b>Lihat peta</b></a></td>
            <td style="background-color:white; width:100px;"><b>' . $row['telp'] . '</b></td>
          </tr>';
}

echo '</tbody></table>';
?>

<!-- END LIST TEATER -->
<br>

</div>
</div>
<div id="rightcontent"><strong>Cari Di Website </strong><br/>
<form method="get" action="http://www.google.com/search" target="_blank">
<table align="left" cellpadding="0">
<tbody>
<tr>
<td nowrap="nowrap">
<input name="q" size="25" maxlength="255" value="" type="text">
</tr>
<tr>
<td align="left">
<input name="submit" value="Search" type="submit">
</td>
</tr>
<tr><td><hr></td></tr>
</tbody>
</table>
</form>
		<?php
		include "./login.html";
		?><hr>
	  <center><br/>
	  <i><font color="#666666" face="verdana"><strong>Powered By <br/>TIKETBIOSKOP.COM</strong></font></i></center>
	  <br/><br/>
</div>
<div id="clearer"></div>
<div id="footer"></div>
</div>
</body>
</html>
