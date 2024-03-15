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
	  
<div id="menu">
    <ul>
      <li><a href="indexs.php" id="aktif">Home</a></li>
      <li><a href="theater.php">Theater</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="help.php">Help</a></li> 
    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent"><br>
	<?php
	include "./include/conn.php"; 
	include "./gallery.php";
	?>
	<br>
		<div id="teks">
			
			<video width="500" controls autoplay loop muted>
										  <source src="gallery/kungfu_panda.mp4" type="video/mp4">
										  <source src="gallery/kungfu_panda.ogg" type="video/ogg">
										  Your browser does not support HTML5 video.
			</video>
			<center style='margin-top: 5px;'><b>Check out the trailer of Kungfu Panda 4 which will be released in 2024</b><center>
      <h2 style="text-decoration: none; margin-top: 20px;">Sinopsis Film</h2>
		<table>
  <tbody valign="top">
    <?php
    // Informasi database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pbw";

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $database);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk mendapatkan data dari tabel tools_gallery
    $sql = "SELECT gambar, tanggal, keterangan, link FROM tools_gallery";
    $result = $conn->query($sql);

    // Memeriksa apakah query berhasil dijalankan
    if ($result->num_rows > 0) {
        // Output data untuk setiap baris hasil query
        while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo '<td><img src="' . $row["gambar"] . '" width="130" height="150"></td>';
			echo '<td>';
			echo '<b>' . $row["keterangan"] . '</b><br>';
			// Ubah format tanggal
			echo '<b>Tanggal Rilis : ' . date('d-m-Y', strtotime($row["tanggal"])) . '</b><br>';
			echo $row["link"];
			echo '</td>';
			echo '</tr>';
        }
    } else {
        // Jika tidak ada data
        echo "0 results";
    }
    ?>
  </tbody>
</table>

	<!-- <table><tbody valign="top">
  <tr>
	<td>
		<img src="./images/penguin.jpg" width="130" height="150"> </td><td><b>PENGUINS OF MADAGASCAR (3D)</b>,Empat Penguin pemberani Skipper, Kowalski, Rico dan Private akan melawan Dr. Octavius Brine (John Malkovich) yang berniat melenyapkan spesis mereka. Bersama agen rahasia bernama Classified (Benedict Cumberbatch), keempat penguin ini memiliki misi khusus untuk menghentikan aksi jahat Dr. Octavius.</td></tr><tr><td colspan="2"><br>
	</td>
  </tr>
  </tbody></table>
</table> -->
</div>
</div>
<div id="rightcontent">
<audio controls autoplay loop>
  <source src="music/counting_star.mp3" type="audio/mp3" width="45">
  Your browser does not support the audio element.
</audio>
<strong>Cari Di Website </strong><br/>
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
		?>
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
