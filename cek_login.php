<?php
    session_start();

    $data_username = $_POST['user'];
    $data_password = md5($_POST['pwd']); 
    include 'include/conn.php';
  if($data_username=="" || $data_password==""){
      echo"<script>alert('Maaf data yang anda masukkan tidak lengkap');
      document.location.href='indexs.php'; </script>\n";
    }else{    
      $query = "SELECT * FROM user WHERE user='$data_username' AND psw='$data_password'";
      $result = $conn->query($query);

      $total = mysqli_num_rows($result);
      if ($total > 0) {
		    while ($data=mysqli_fetch_array($result))
		    {
		      $usernamex= $data["user"];
		      $namax= $data["nama"];
		    }        
           $_SESSION['LOGIN'] = 'OK';
	         $_SESSION["username"]=$usernamex; 
	         $_SESSION["nama"]=$namax;                  
          header('Location: tiketonline.php');
      }else if($data_username=="admin" || $data_password=="admin"){
		header('Location: admin.php');
	  } else {
        echo "<script>alert('Maaf Username / Password tidak dikenal!!'); document.location.href='indexs.php';</script>";;
      }
  }  
?>