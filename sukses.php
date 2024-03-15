<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIKETBIOSKOP.COM - Pembayaran Sukses</title>
    <link rel="stylesheet" href="gaya.css">

    <!-- Tambahkan script JavaScript di sini -->
    <script>
        // Fungsi untuk mengarahkan ke print_pdf.php saat halaman dimuat
        window.onload = function () {
            window.location.href = 'print_pdf.php';
        };
    </script>
</head>

<body style="background-image: url(images/3d.jpg);">
    <div id="wrapper">
        <div id="header" style="background-image: url(images/p.png);"></div>

        <div id="menu">
            <!-- Add your menu content here if needed -->
        </div>

        <div id="bawahnav"></div>
        <div id="clearer"></div>
        <div id="leftcontent">
            <div id="teks">
                <fieldset>
                    <legend><h3>Pembayaran Sukses</h3></legend>
                    <p>Terima kasih, pembayaran Anda telah berhasil.<br>Silahkan Download E-Ticket nya secara otomatis.</p>
                    <p>atau</p>
                    <!-- Pilihan untuk download manual -->
                    <p><a href="print_pdf.php" download>Download Manual</a></p>
                    <hr />
                    <!-- Tombol Kembali -->
                    <input type="button" value="Kembali" onclick="window.location.href='tiketonline.php';">
                </fieldset>
                <hr />
            </div>
        </div>

        <div id="rightcontent">
            <strong>Cari Di Website </strong><br />
            <form id="searchthis" action="http://www.google.com/search" style="display:inline;" method="get">
                <input id="b-query" maxlength="255" name="q" size="17" type="text" />
                <input id="b-searchbtn" value="Search" type="submit" />
            </form>
            <hr />
            <center><br />
                <i><font color="#666666" face="verdana"><strong>Powered By <br />TIKETBIOSKOP.COM</strong></font></i></center>
            <br /><br />
        </div>

        <div id="clearer"></div>
        <div id="footer"> </div>
    </div>
</body>

</html>