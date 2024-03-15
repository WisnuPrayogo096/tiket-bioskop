<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TIKETBIOSKOP.COM</title>
<link href="gaya.css" rel="stylesheet" type="text/css" />
<script>
        function checkWordCount() {
            var textarea = document.getElementsByName("comments")[0];
            var words = textarea.value.split(/\s+/).length;
            
            if (words > 50) {
                alert("Sinopsis tidak boleh lebih dari 50 kata.");
                // Menghapus kata-kata yang melebihi batas
                var trimmedText = textarea.value.split(/\s+/).slice(0, 50).join(" ");
                textarea.value = trimmedText;
            }
        }
</script>
</head>
<body style="background-image: url(images/3d.jpg);">
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
	<li><a href="indexs.php">Logout</a></li>
    </ul>
  </div>
<div id="bawahnav"></div>
<div id="clearer"></div>
<div id="leftcontent">
<div id="teks"><hr/>
  <strong><h2>Selamat Datang Admin</h2></strong><br/>
  <form action="koneksi_daftarTeater.php" method="post" enctype="multipart/form-data">
    <table border="0" align="left">
        <tr>
            <table style="border:2px solid black;">
                <tr>
                    <th colspan="2">
                        Create Theater
                    </th>
                </tr>
                <tr>
                    <td>
                        Nama Theater:
                    </td>
                    <td>
                        <input type="text" size="10" name="namateater">
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama Mall:
                    </td>
                    <td>
                        <input type="text" size="20" name="namamall">
                    </td>
                </tr>
                <tr>
                    <td>
                        Alamat:
                    </td>
                    <td>
                        <input type="text" size="50" name="alamat">
                    </td>
                </tr>
                <tr>
                    <td>
                        Link:
                    </td>
                    <td>
                        <input type="text" size="50" name="link">
                    </td>
                </tr>
                <tr>
                    <td>
                        Telp:
                    </td>
                    <td>
                        <input type="tel" size="15" name="telp">
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
