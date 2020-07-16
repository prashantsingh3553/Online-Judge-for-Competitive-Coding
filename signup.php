<?php
	session_start();
	if (isset($_SESSION['handle'])) {
		header("Location: dash.php");
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<style>
		.signup { 
			border: 1px solid #999999;
			/*text-align: right: ;*/
			font: normal 14px helvetica; color:#444444; 
	}</style>
</head>
<body>
<!--  <div class="signup-decorate">

 	<form action="includes/signup.inc.php" method="POST">
	  Handle:<input type="text" name="handle"> <br> <br>
 		Name:<input type="text" name="name"> <br> <br>
 		Email:<input type="text" name="email"> <br> <br>
 		Passw:<input type="password" name="password"> <br> <br>
 		ConfirmPassw:<input type="password" name="passwordRepeat"> <br> <br>
 	<input type="image" name="signup-button" src="ok.png" />
 		<button type="submit"  value="fuck" name="signup-button">Submit</button>
 	</form>

 </div> -->

	<table class="signup" border="0" cellpadding="2"cellspacing="5" bgcolor="#eeeeee" align="center">
		<th colspan="2" >Signup Form</th>
			<form method="POST" action="includes/signup.inc.php">
				<tr><td>Handle</td>
					<td>
						<input type="text" maxlength="32" name="handle" />
					</td>
				</tr>
				<tr><td>Name</td>
					<td>
						<input type="text" maxlength="32"name="name" />
					</td>
				</tr>
				<tr><td>Email</td><td><input type="text" maxlength="64"name="email" /></td>
				</tr><tr><td>Password</td><td><input type="text" minlength="6" maxlength="20"
				name="password" /></td>
				</tr><tr><td>Confirm Password</td><td><input type="text" minlength="6"maxlength="20"
				name="passwordRepeat" /></td>
				</tr><tr><td colspan="2" align="center">
				<input type="submit" name="signup-button" value="Signup" /></td>
				</tr>
			</form>
	</table>


</body>
</html>