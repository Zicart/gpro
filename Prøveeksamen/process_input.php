<?php
	
	/*$user_input[] = $_POST['name'];
    $user_input[] = $_POST['mail'];
	$var=0;*/
	
	$user_input = [
				"name" => $_POST['name'],
				"mail" => $_POST['mail'],
				];
	
	echo $user_input['name'];
	echo $user_input['mail'];
	
	
	
	/*foreach ($user_input as $item) {
		echo $user_input [$var];
		$var++;
		
	}
	*/
	
	
?>