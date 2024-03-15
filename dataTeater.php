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

$result2 = mysqli_query($link, "SELECT * FROM listteater");
$num_rows2 = mysqli_num_rows($result2);

?>

<div id="wrapper">
<div id="header" style="background-image: url(images/p.png);"></div>

<div id="menu">
    <ul>
      <li><a href="admin.php">Admin Panel</a></li>
      <li><a href="dataUser.php">Data User</a></li>
      <li><a href="dataPemesanan.php">Pemesanan</a></li>
	  <!-- <li><a href="dataGallery.php">Data Gallery</a></li> -->
      <li><a href="dataTeater.php">Data Theater</a></li>
      <li><a href="daftarTeater.php">Create Theater</a></li>
      <!-- <li><a href="teaterUpdate.php">Update Thea</a></li> -->
	<li><a href="indexs.php">Logout</a></li>
    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><hr/>
		<strong><h2>Selamat Datang Admin</h2></strong>
		<b>Jumlah Theater hingga saat ini:</b> <?php echo $num_rows2; ?><br/>
		<br>
		<table border = "1">
			<tr>
				<th>No</th>
				<th>Nama Theater</th>
				<th>Nama Mall</th>
                <th>Alamat</th>
                <!-- <th>Link</th> -->
                <th>Telp</th>
				<th colspan = "2">Action</th>
			</tr>
			<?php
				while($row = mysqli_fetch_assoc($result2)){
					echo"<tr><td>";
					echo $row["no"]."</td><td>";
					echo $row["nama_teater"]."</td><td>";
					echo $row["mall"]."</td><td>";
                    echo $row["alamat"]."</td><td>";
                    // echo $row["link"]."</td><td>";
                    echo $row["telp"]."</td><td>";
					echo "<a href='teaterUpdate.php?id=" . $row["no"] . "'>Update</a></td><td>";
					echo '<a href="deleteTeater.php?id=' . $row["no"] . '" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data?\')">Delete</a></td></tr>';
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
