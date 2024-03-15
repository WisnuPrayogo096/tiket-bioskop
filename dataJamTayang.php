<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-image: url(images/3d.jpg);">

<?php
$link = @mysqli_connect("localhost", "root", "", "pbw");

// Periksa koneksi
if (!$link) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_select_db($link, "pbw");

$result2 = mysqli_query($link, "SELECT jam_tayang.id, jam_tayang.id_teater, jam_tayang.jam, listteater.nama_teater FROM jam_tayang INNER JOIN listteater ON jam_tayang.id_teater = listteater.no");
$num_rows2 = mysqli_num_rows($result2);

?>

<div id="wrapper">
<div id="header" style="background-image: url(images/p.png);"></div>

<div id="menu">
    <ul>
      <li><a href="admin.php">Admin Panel</a></li>
      <li><a href="dataUser.php">Data User</a></li>
      <li><a href="dataPemesanan.php">Pemesanan</a></li>
      <li><a href="dataJamTayang.php">Jam Tayang</a></li>
      <li><a href="daftarJamTayang.php">Create Jam</a></li>
	<li><a href="indexs.php">Logout</a></li>
    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><hr/>
		<strong><h2>Selamat Datang Admin</h2></strong>
		<b>Jumlah Jam Tayang hingga saat ini:</b> <?php echo $num_rows2; ?><br/>
		<br/>
		<table border = "1">
			<tr>
				<th>No</th>
                <th>ID Theater</th>
                <th>Nama Theater</th>
                <th>Jam Tayang</th>
                <th colspan="2">Action</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result2)){
					echo "<tr><td>";
                    echo $row["id"] . "</td><td>";
                    echo $row["id_teater"] . "</td><td>";
                    echo $row["nama_teater"] . "</td><td>"; // Tambahkan kolom nama_teater
                    echo $row["jam"] . "</td><td>";
                    echo "<a href='jamtayangUpdate.php?id=" . $row["id"] . "'>Update</a></td><td>";
                    echo '<a href="deleteJamTayang.php?id=' . $row["id"] . '" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data?\')">Delete</a></td></tr>';
                    echo "</tr>";
				}
			?>
		</table>
		<br>
	  <hr/>	
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
