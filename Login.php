<?php 

 include_once 'config.php';
 ?>

 <?php 

 session_start();

 
   
   $Email = $_POST["email"];
   $Password = $_POST["password"];


$sql = "select * from user where email = '$Email' &&  password ='$Password' ";

  $result = mysqli_query($conn,$sql);

 $num = mysqli_num_rows($result);

if($num == 1) {
	
    $_SESSION['username'] = $Email;
   header('location:index.html'); 

}else{
	echo 'Invalid user email or password';
	header('location:Login.html'); 
}

mysqli_close($conn);

  ?>