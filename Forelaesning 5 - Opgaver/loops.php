<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

	<?php
	$counter = 1;
	
	echo "<p>\n";
	
	while ($counter < 10){
		echo "abc ";
		$counter++;
	}
	
	echo "</p>\n";
	echo "<p>\n";

	$counter = 1;
	do {
		echo "xyz ";
		$counter++;
	} while($counter < 10);
	
	echo "</p>\n";
	echo "<p>\n";
	
	for ($counter1=1; $counter1<10; $counter1++){
		echo "$counter1 ";
	}
	
	echo "</p>\n";
	echo "<p>\n";
	
	echo "\n <ol>";
	for ($counter2='A'; $counter2<'G'; $counter2++){
		echo "<li>Item $counter2</li> ";
	}
	echo "\n </ol>";
	echo "</p>\n";
	?>

</body>
</html>
