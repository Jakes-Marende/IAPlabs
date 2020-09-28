<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" >
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title></title>
	<style>
		body{
	         background-image: url(new3.jpg);
	         background-size: auto;
            }
        label{
              color: gold;
            }
        header{
               color: gold;
            }   
	</style>
</head>
<body>
	<form action="processsignup.php" method="post" enctype="multipart/form-data">

		<header>Signup Form</header>

		  <fieldset>
           
		    <label for="image"><b>Profile Photo:</label></b></label><br>
		    <input type="file" name="image" placeholder="Profile Photo" id="image" alt="Avatar"><br>

		    <label for="fname"><b>Fullnames:</b></label><br>
		    <input type="text" name="fname" placeholder="Enter your fullnames here..." id="fname"><br>

		    <label for="email"><b>Email Address:</b></label><br>
		    <input type="email" name="email" placeholder="Enter your email address here..." id="email"><br>

            <label for="pword"><b>Password:</b></label><br>
            <input type="password" name="pword" placeholder="Enter your password here..." id="pword" style="width: 25%; padding: 12px 20px; border: 1px solid #ccc;"><br>

		    <label for="location"><b>City of Residence:</b></label><br>
		    <input type="text" name="location" placeholder="Enter your city of residence here..." id="location"><br>


		    <button type="reset" class="resetbtn" name="reset" value="reset">Reset</button>
		    <button type="submit" class="signupbtn" name="submit" value="signup">Signup</button>

		    <p style="color: white;">Regular user?Log in <a href="login.php">here</a></p>
     
          </fieldset>

	</form>


</body>
</html>
