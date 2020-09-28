<?php
require_once("DBconnect.php");

if(isset($_POST["submit"])){

	
$Fullname=$_POST["fname"];
$Email_add=$_POST["email"];
$Location=$_POST["location"];
$password=$_POST["pword"];

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }



$sql="INSERT INTO user(Fullname,Email,Password,Location,Image)VALUES('$Fullname','$Email_add','$password','$Location','image')";

$query_run = mysqli_query($conn, $sql);

	if ($query_run) {
		echo '<script type="text/javascript"> alert("Image Profile uploaded") </script>';
	}
	else{
		// echo (mysqli_error($conn));
		 echo '<script type="text/javascript"> alert("Image Profile  Not uploaded") </script>';
		//echo ' Record not added';
	}


}

?>