<?php 
include"include/conn.php";
$hari=$_POST['hari'];
$tempat=$_POST['tempat'];
$judul=$_POST['film'];
$jam=$_POST['jam'];
$baris=$_POST['baris'];
$kolom=$_POST['kolom'];
$sheet="$baris-$kolom";
$payment=$_POST['metode_pembayaran'];
$cek=0;
$no=1;
$a1="SELECT * FROM pemesanan";
$q2=$conn->query($a1);
while($data=mysqli_fetch_array($q2)){
$no=$data['no'];
if($data['tempat']==$tempat&&$data['judul']==$judul&&$data['jam']==$jam&&$data['sheet']==$sheet&&$data['hari']==$hari){
$cek=1;
}
}
if($cek==1){ echo "<script>alert('Maaf kursi sudah ada yang memesan, Silahkan pesan kembali.'); document.location.href='tiketonline.php';</script>";}else
{

$q1="INSERT INTO pemesanan(tempat,judul,jam,sheet,hari,payment) VALUES ('$tempat','$judul','$jam','$sheet','$hari','$payment');";
$q2=$conn->query($q1);
if($q2){ echo "<script>alert('Terima kasih sudah memesan tiket bioskop.'); document.location.href='cetak-tiket.php?id=$no';</script>";
};
};
?>
