<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Kappa</title>
</head>

<body>

<?php
	$Name = $_POST['name'];
	$Email = $_POST['mail'];
               
	$user_data = "$Name, $Email|";
            
	$fh = fopen("save.txt", "a") or die("Filen kunne ikke oprettes");
	fwrite($fh, $user_data) or die("Kunne ikke skrive til filen");
	fclose($fh);
?>

</body>
</html>