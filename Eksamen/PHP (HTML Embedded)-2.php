<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>
	<!--<form name="formular" id="formular" method="post" action="Indsæt action her" autocomplete="on">
		<label>Hvilken type bolig bor du i?
			<div>
				<div><input type="radio" name="boligtype" id="lejlighed" value="lejlighed"> Lejlighed</div>
				<div><input type="radio" name="boligtype" id="ejerlejlighed" value="ejerlejlighed"> Ejerlejlighed</div>
				<div><input type="radio" name="boligtype" id="andet" value="andet"> Andet</div>
			</div>
		</label>
		
		<label>Hvor stor er din bolig?
				<div>    
					<select size="1" name="boligstoerrelse" id="boligstoerrelse">
					  <option>0-50 m2</option>
					  <option>51-100 m2</option>
					  <option>Større end 100 m2</option>
					</select>
				</div>
			</label>
		
		 <div><input type="submit" id="ok" value="OK"></div>
	</form> -->
	
<?php
/*
function print_array($data){
	for($i = 0; $i <count($data); $i++) {
		for($j = 0; $j <count($data[$i]); $j++) {
		  echo($data[$i][$j]);
		}
	}
}

function print_array2($data){
	foreach($data as $item => $description)
    echo $item . ": " . $description;
}


$cars = array(
		array("Car_brand" => "Ford", "Model" => "Focus", "Age" => "5 years"),
		array("Car_brand" => "Skoda", "Model" => "Octavia", "Age" => "3 years")
	
);


print_array2($cars);
*/

	if ($button1 == "activated"){
		echo "Open port";
	}
	elseif ($button2 == "activated"){
		echo "Close port";
	}
	else{
		echo "Stop port";
	}

?>

</body>
</html>
