<?php 
	session_start();
	if($_POST['submit']){
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$db = mysqli_connect("localhost", "root", "legendary", "login") or die ("Failed to connect");
		$query = "INSERT INTO members(username,password,activated) VALUES('$username', '$password','1')";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "Succesfully registered";
			header('Location: index.php');
		}
		else {
			echo "Failed to register";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div id="login-box">
  <div class="left">
<h1>Sign Up</h1>
<form method="post" action="register.php">
	<input type="text" name = "username" placeholder="Username" />
	<input type="password" name="password" placeholder="Password" />
	<input type="password" name="password2" placeholder="Retype Password" />
	
	<input type="submit" name="submit" value="Sign Me Up">
</div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
	
</form>
<a href = "index.php" >Login</a>

</body>
</html>
