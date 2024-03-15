<?php
  session_start();
  if($_SESSION['LOGIN'] != 'OK'){
  header('location: indexs.php');
  }
  $namanya=$_SESSION["nama"];
?>
<?php 
include"./include/conn.php";
$id=$_GET['id'];
$q1= "SELECT * FROM pemesanan WHERE no=$id+1;";
$q2=$conn->query($q1);
$data=mysqli_fetch_array($q2);
?>
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
<?php
 $menu=1;
 include "topmenu.php";
?>    
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks">

<?php 
$user=$_SESSION["username"];
$q1="SELECT * FROM user WHERE user='$user';";
$q2=$conn->query($q1);
$dataa=mysqli_fetch_array($q2);
$_SESSION["NO"]=$data['no'];
$namanya=$_SESSION["nama"];
$a=crc32($data['no']);
?>
<form action="sukses.php" method="post">
<fieldset>
<legend><h3>Silahkan Cek Tiket Bioskop Anda</h3></legend>
  	  <table width="100%">
    <tr><td colspan="3"><strong><u style="text-decoration: none;">INFORMASI MEMBER <?php echo strtoupper($namanya); ?></u></strong></td></tr>  	  
	  <tr><td>Nama</td><td>:</td><td><?php echo $dataa['nama']; ?></td></tr>
    <tr><td>Username</td><td>:</td><td><?php echo $dataa['user']; ?></td></tr>	  
	  <tr><td>Email</td><td>:</td><td><?php echo $dataa['email'];?></td></tr>
	  <tr><td>No HP</td><td>:</td><td><?php echo $dataa['hp'];?></td></tr>    
	  <tr><td>Alamat</td><td>:</td><td><?php echo $dataa['alamat'];?></td></tr>  
	  <tr><td colspan="3"><strong><br><u style="text-decoration: none;">INFORMASI TIKET</u></strong></td></tr>
	  <tr><td>Judul Film</td><td>:</td><td> <?php echo $data['judul']; ?></td></tr>
	  <tr>
			<td>Lokasi Theater</td>
			<td>:</td>
			<td>
				<?php
				$tempat_parts = explode('-', $data['tempat']);
				if (count($tempat_parts) > 1) {
					echo trim($tempat_parts[1]); // Menampilkan bagian setelah strip
				} else {
					echo $data['tempat']; // Jika tidak ada strip, tampilkan keseluruhan string
				}
				?>
			</td>
		</tr>
	  <tr><td>Hari</td><td>:</td><td> <?php echo $data['hari']; ?></td></tr>
	  <tr><td>Waktu</td><td>:</td><td><?php echo $data['jam'];?></td></tr>
	  <tr><td>Kursi</td><td>:</td><td><?php echo $data['sheet'];?></td></tr>
	  <tr><td>Tagihan</td><td>:</td><td>25.000</td>  
	  <tr><td>Metode Pembayaran</td><td>:</td><td><?php echo $data['payment'];?></td></tr>
	  <tr><td>SN</td><td>:</td><td><?php echo $a;?></td></tr>  
	  <tr><td colspan="2"></td><td><b>**No SN akan divalidasi oleh admin tiketbioskop.com</b></td></tr>
	  </table>
	  <input type="submit" value="Bayar"><input type="button" value="Kembali" onclick="window.history.back();">
</fieldset>	  
    </form>	  
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
<div id="footer"> </div>
</div>
</body>
</html>
