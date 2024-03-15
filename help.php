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
     <li><a href="indexs.php">Home</a></li>
      <li><a href="theater.php">Theater</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="help.php" id="aktif">Help</a></li>
    </ul>
</div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><h2><u style="text-decoration: none;">Help</u></h2>
<ul>
<li><b>Home</b><br>
Di sini pengunjung dapat melihat semua film yang akan ditampilkan pada bioskop. Sebelum memesan, penonton harus registrasi, setelah mendaftar login ke tiketbioskop.com<br></li>
<li><b>Teater</b><br>
Di sini akan ditampilkan tempat-tempat lokasi teater, yang anda inginkan.<br></li>
<li><b>About</b><br>
Menampilkan pembuat website.<br></li>
<li><b>Help</b><br>
Berisi keterangan fitur yang ada dalam website dimana sebagai panduan oleh visitor untuk mengakses website ini.</li>
<li><b>Panduan Pemakaian Web ini : </b></li>
	<ul>
		<li>User harus sudah menjadi member dan login terdahulu sebelum memesan tiket.</li>
		<li>Jika belum menjadi member registrasi terlebih dahulu di bagian tulisan daftar.</li>
		<li>Setelah mengisi form pendaftaran user harus login terlebih dahulu dengan username dan password yang di registrasi.</li>
		<li>Setelah login user dapat memilih teater, hari, judul film, jam tayang dan tempat duduk yang diinginkan.</li>
		<li>Setelah itu tekan cetak.</li>
		<li>Setelah cetak nanti ada tampilan berupa format pdf yang berisi serial number yang harus di print dan diberikan ke loket tempat user ingin menonton.</li>
	</ul>
</ul>
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

