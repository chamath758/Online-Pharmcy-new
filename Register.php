<?php 

 include_once 'config.php';
 ?>

 <?php 

 session_start();
header('location:Login.html'); 
 
   $ID = $_POST["id"];
   $Email = $_POST["email"];
   $Password = $_POST["password"];



$sql = "insert into user(id,email,password)values('$ID','$Email','$Password')";

if(mysqli_query($conn,$sql)) {
	
   echo "<script> alert ('Register Successfull.')</script>";
   

}else{
	echo "<script>alert ('Error')</script>";
}

mysqli_close($conn);

  ?>