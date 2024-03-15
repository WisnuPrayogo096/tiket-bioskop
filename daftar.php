<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js_validate/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js_validate/jquery.js"></script>		
    <script src="js_validate/jquery.validate.min.js" type="text/javascript"></script>  
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					rules: {
						user: "required",
						nama: "required",
						psw: "required",
						psw2: "required",
						email: "required",
						hp: "required",
						alamat: "required",						
					},
					messages: {
						user: "* Kosong",
						nama: "* Kosong",
						psw: "* Kosong",
						psw2: "* Kosong",
						email: "* Kosong",
						hp: "* Kosong",
						alamat: "* Kosong",						
					}
				});
			});
		</script>



</head>
<body style="background-image: url(images/3d.jpg);">
<div id="wrapper">
<div id="header" style="background-image: url(images/p.png);"></div>

<div id="menu">
    <ul>
      <li><a href="indexs.php" >Home</a></li>
      <li><a href="theater.php">Theater</a></li>
      <li><a href="training.php">About</a></li>
      <li><a href="peserta.php">Help</a></li>
	  

    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks">

<h3 align="left"><u style="text-decoration: none;">Form Pendaftaran Member</u></h3>
<form method="post" action="save_daftar.php" name="formdaftar" id="frm">
<table align="center">
<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="10">

<tr><td>Username</td><td>:</td><td><input type="text" name="user" size="25"></td></tr>

<tr><td>Masukan Password</td><td>:</td><td><input type="password" name="psw" size="15">

<tr><td>Konfirmasi Password</td><td>:</td><td><input type="password" name="psw2" size="15"></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" name="email" size="20">
<br/><font color="#333333">contoh: umm@umm.com</font></td></tr>
<tr><td>No HP</td><td>:</td><td><input type="text" name="hp" size="18">
<br/><font color="#333333">contoh: 0822xxxx</font></td></tr>
<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat" size="35"></td></tr>
<tr><td colspan="3"><input type="submit" name="submit" value="Daftar Sekarang"><input type="reset" value="Reset"><input type="button" value="Kembali" onclick="window.history.back();">

</td></tr>
</table>
</form>
<br>

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