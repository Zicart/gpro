<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

	<form name="formular" id="formular" method="post" action="check_login.php" autocomplete="on">
		<fieldset>
			<legend>Personlige oplysninger</legend>
				<div><label>Brugernavn: <input type="text" name="brugernavn" id="brugernavn" required="required" size="30" maxlength="100"></label></div>
				<div><label>Password: <input type="password" name="pword" id="pword" required="required" size="30" maxlength="100"></label></div>
		</fieldset>
		<div><input type="submit" id="logind" value="Log ind">
	</form>

<?php
/*
	$entered_username = $_POST['brugernavn'];
	$entered_password = $_POST['pword'];
	
	$fetch_username = "SELECT * FROM users WHERE " . "username=" . "'" . $entered_username . "'";
	$fetch_password = "SELECT * FROM users WHERE " . "password=" . "'" . $entered_password . "'";
	
	$result_username = mysqli_query($connection, $fetch_username);
	$result_password = mysqli_query($connection, $fetch_password);

	if(mysqli_num_rows($result_username) > 0 && mysqli_num_rows($result_password) > 0){
		echo "Velkommen";
	}
	else if(mysqli_num_rows($result_username) == 0 && mysqli_num_rows($result_password) > 0){
		echo "Brugernavn findes ikke";
	}
	else if(mysqli_num_rows($result_username) > 0 && mysqli_num_rows($result_password) == 0){
		echo "Forkert password";
	}
	else{
		echo "Brugernavn og password findes ikke";
	}
	*/
?>

</body>
</html>
