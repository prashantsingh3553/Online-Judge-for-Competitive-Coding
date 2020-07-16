<?php
	session_start();
	if(isset($_POST['login-button'])){
        $_SESSION = array();
        $_SESSION['handle'] = $_POST['handle'];
		header("location:../dash.php");
    }
?>