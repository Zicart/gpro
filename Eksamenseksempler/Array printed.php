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

$cars = array(
		array('Car_brand' => 'Ford', 'Model' => 'Focus', 'Age' => '5 years'),
		array('Car_brand' => 'Skoda', 'Model' => 'Octavia', 'Age' => '3 years')
			);
				
				
				
function print_array($data){
	for($i = 0; $i <count($data); $i++) {
		for($j = 0; $j <count($data[$i]); $j++) {
		  echo($data[$i][$j]);
		}
	}
}

function print_array2($data){
	$j = 0;
	for($i = 0; $i <count($data); $i++) {
		foreach($data as $item) {
			echo $item; ++$j;
		}
	}
}

	function print_array3($data){
		foreach($data as $section => $items)
			foreach($items as $key => $value)
				echo "$key: $value<br>";
	}

print_array3($array1);
				
?>

</body>
</html>