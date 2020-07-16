
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<style type="text/css">
		.login-decorate{
			 margin:0 0 50px 0;
	    padding:10px;
	    text-align:center;
	    font-size:30px;
	    color:darken(#e5e5e5, 50%);
	    border-bottom:solid 1px #e5e5e5;
		}

	</style>
</head>
<body>
 <div class="login-decorate">

 	<form action="./backend/loginInit.php" method="POST">
	  Handle:<input type="text" name="handle"> <br> <br> 		
 		Passw:<input type="password" name="password"> <br> <br>

 		<button type="submit" name="login-button">Submit</button>
 	</form>

 </div>


</body>
</html>