<?php 

 include_once 'con1.php';
 ?>

 <?php 

 
 
   $FN = $_POST["firstname"];
   $LN = $_POST["lastname"];
   $Country = $_POST["country"];
    $Sub = $_POST["subject"];



$sql = "insert into madu(fn,ln,area,sub)values('$FN','$LN','$Country','$Sub')";

if(mysqli_query($conn,$sql)) {
	
   echo "<script> alert ('Contact  Successfull.')</script>";
   

}else{
	echo "Error";
}

mysqli_close($conn);

  ?>