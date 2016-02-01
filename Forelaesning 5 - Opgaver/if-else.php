<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

	<?php
	$currentmonth=date('F', time());

	if ($currentmonth=='August'){
		echo "<p>It's August, so it's really hot.</p>";
	}
	
	else {
		echo "<p>Not August, so at least not in the peak of the heat</p>";
	}
	?>

</body>
</html>
