<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

	<?php
	echo "<table border=\"1\">";
	for ($row=1; $row<=7; $row++){
		echo "<tr>\n";
		for($col=1; $col<=7; $col++){
			$x=$col * $row;
			echo "<td>$x</td>\n";
		}
		echo "</tr>";
	}
	echo "</table>";
	?>

</body>
</html>
