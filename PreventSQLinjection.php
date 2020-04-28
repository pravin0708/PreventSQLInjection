	<?php
	require('db.php');
	
     if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); //remove backslashes 
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string for use in an SQL query
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
	    $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysql_error());

?>