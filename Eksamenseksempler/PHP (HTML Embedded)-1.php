<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Kappa</title>
</head>

<body>

<?php
$array1 = array(
                array("Volvo", "Sverige"),
                array("Mercedes", "Tyskland")
                );

$array2 = array(
                array("Aalborg", "Jylland", "Danmark"),
                array("Odense", "Fyn", "Danmark"),
                array("Roskilde", "Sjælland", "Danmark")
                );

				
function print_array($data){
	for($i = 0; $i <count($data); $i++) {
		for($j = 0; $j <count($data[$i]); $j++) {
		  echo($data[$i][$j]);
		}
	}
}

print_array($array2);
				
?>

</body>
</html>