<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Array in table</title>
</head>

<body>

<?php
	$persons = array(
	array("Fornavn" => "Kristian", "Efternavn" => "Jensen", "By" => "Aalborg"),
	array("Fornavn" => "Anne", "Efternavn" => "Petersen", "By" => "Vejle")
	);
?>

<!-- Avanceret løsning med array_walk -->

<?php
	function print_row($item) {
	  echo('<tr>');
	  array_walk($item, 'print_cell');
	  echo('</tr>');
	}

	function print_cell($item) {
	  echo('<td>');
	  echo($item);
	  echo('</td>');
	}
?>

<div>
	<table border=1>
		<tr>
			<th>Fornavn</th>
			<th>Efternavn</th>
			<th>By</th>
		</tr>
	  
	  <?php array_walk($persons, 'print_row');?>
	</table>
</div>


<!-- Anden løsning med et foreach loop -->

<div>
	<table border=1>
		<tr>
			<th>Fornavn</th>
			<th>Efternavn</th>
			<th>By</th>
		</tr>
	<?php foreach($persons as $row) {
	  echo('<tr>');
	  foreach($row as $cell) {
		echo('<td>' . $cell . '</td>');
	  }
	  echo('</tr>');
	} ?>
	</table>
</div>

</body>
</html>