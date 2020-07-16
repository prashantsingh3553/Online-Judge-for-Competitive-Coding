
<!DOCTYPE html>
<html>
<head>
	<title>EMOJ</title>	
	
	<style type="text/css">
		/*
			To give background color to header
			and display these
		*/
		.header {
		  width: 100%;/* display color from left to right on full page*/
      position: fixed; /* so that header doesn't move on 
      scrolling the page */
      background: #333; /* to give bg color to header*/ 
      padding: 10px 0; /* Size of header color strip*/
      color: #fff; /* color of text on heading*/
		}
		/*
			Header should be on the top
		*/
		.header {
			top: 0;
		}
		/*
			to decorate navigation bar inside header
		*/
		.header a{
        color: #f2f2f2; 
        text-decoration: none;/* removes underline*/
        padding: 6px 25px;
        float : right;
    }
    .heading {
    	color: rgb(60, 179, 113);
    }
    .para-decorate{
    	/*text-align: justify;*/
    	text-decoration:  none;
    	  text-indent: 100px;
    	 background: 
   		font-family: 'Enriqueta', arial, serif; line-height: 1.25; margin: 0 0 10px; font-size: 27px; font-weight: bold;
   		background-color: #C0C0C0;
   		/*color: #333333; font-family: "Helvetica Neue",Arial,sans-serif; font-size: 16px; font-weight: 300; line-height: 1.5625; margin-bottom: 15px; 
   */ }

	</style>
</head>
<body>
	<header class = "header"> 
		<nav>
			<?php
				if (isset($_SESSION['handle'])) {
					echo "Welcome ".$_SESSION['handle'];
					echo '<a href="includes/logout.inc.php">Logout</a>';
				}
			?>
			<!-- <a href="dash.php">Home</a> -->
			<?php
				if (!isset($_SESSION['handle'])) {
					echo '<a href="login.php">Login</a>';
				}			
				if (!isset($_SESSION['handle'])) {
					echo '<a href="signup.php">Signup</a>';
				}
			?>
		</nav>
	</header>
	<br>
	<h1 class="heading"><center>Welcome to EMOJ</center></h1>
	<br>
	<p class="para-decorate">
		EMOJ is a competitve programming platform. Contests are regularly hosted here. Competitive coding enthusiasts from all over the world participate in these contests.

		It also contains a rich set of problems from previous contests which are awesome to improve ones algorithm skills.

		Based on contest performance, it also gives ratings for each user(as a measure of how one performed in the contest).

		People participate in these contests to improve their algorithm and coding skills. But most people participate just for the kick of it:)
	</p>
	<br>
	<br><br>
    
    
<div style="float: left;">          
		<form action="./backend/bpoj.php" method="post">
			Select Language:<br>
            <select name="lang" id="lang">
                <option value="C">C</option>
                <option value="CPP" selected="selected">C++</option>
                <option value="CPP11">C++11</option>
                <option value="CLOJURE">Clojure</option>
                <option value="CSHARP">CSharp</option>
                <option value="GO">GO</option>
                <option value="JAVA">Java</option>
                <option value="HASKELL">Haskell</option>
                <option value="JAVASCRIPT">JavaScript </option>
                <option value="JAVASCRIPT_NODE">Javascript_node</option>
                <option value="PERL">Perl</option>
                <option value="PHP">PHP</option>
                <option value="PYTHON">Python </option>
                <option value="RUBY">Ruby</option>
            </select><br>
			<br>
            Enter Your Code : <br>
            <textarea name="code" style="width:700px; height:350px;"></textarea> <br><br>
            Input : <br>
            <textarea name="input" style="width:300px; height:120px;"></textarea> <br><br>
        
            
			
						<button type="submit" name="submitCode"> Submit Code </button>
					
                

		</form>
    <br><br>
    
	
</div>
	
</body>
</html>