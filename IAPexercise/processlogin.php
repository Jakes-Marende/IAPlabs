<?php
require_once("DBconnect.php");
session_start();

if(isset($_POST["login"]))
{
	$Email=$_POST["email"];
	$Pword=$_POST["pword"];
	



	$query= "SELECT * FROM user WHERE  Email='$Email' AND Password = '$Pword'";
	$result=mysqli_query($conn, $query);
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
		  echo '<script type="text/javascript">alert("You are logged in successfully")</script>';
		}				
?>
			<?php
			 setcookie('email', $Email, time()+60*60+7);
             session_start();
             $_SESSION['email'] = $Email;
             $_SESSION['fname'] = $Fullname;
             ?>
			<script type="text/javascript">window.location.href="welcome.php"</script>
			
           
	}
} ? >    

