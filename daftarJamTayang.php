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
  <strong><h2>Selamat Datang Admin</h2></strong><br/>
  <form action="koneksi_daftarJamTayang.php" method="post" enctype="multipart/form-data">
    <table border="0" align="left">
        <tr>
            <table style="border:2px solid black;">
                <tr>
                    <th colspan="2">
                        Tambah Jam Tayang
                    </th>
                </tr>
                <tr>
                    <td>
                        ID Theater:
                    </td>
                    <td>
                        <select name="IDteater">
                            <?php
                                include "include/conn.php";

                                // Query untuk mendapatkan data IDteater dari tabel listteater
                                $sql = "SELECT no, nama_teater FROM listteater";
                                $result = $conn->query($sql);

                                // Tampilkan pilihan dropdown
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['no'] . "'>" . $row['no'] . " - " . $row['nama_teater'] . "</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Jam Tayang:
                    </td>
                    <td>
                        <input type="text" size="20" name="jamtayang">
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