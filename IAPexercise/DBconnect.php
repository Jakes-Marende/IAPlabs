<?php

$server="localhost";
$username="root";
$password="";
$database="iaplab1";

$conn=mysqli_connect($server,$username,$password,$database);
if (!$conn) {
	# code...
	die("Could not connect".mysqli_connect_error());
}
else{
	echo "Connected Successfully";

}



?>