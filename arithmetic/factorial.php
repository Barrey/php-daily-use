<?php

function factorial($numbers){
	
	$result = $numbers;
	
	for($x = $numbers-1; $x > 0; $x--){
		$result *= $x;
	}
	
	return $result;
}

echo factorial(5);

?>