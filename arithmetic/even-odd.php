<?php
function genap($max){
	
	$result = array();
	
	for($x = 1; $x <= $max; $x++){
		if($x%2 == 0){
			$result[] = $x;
		}
	}
	
	return $result;
}

function ganjil($max){
	
	$result = array();
	
	for($x = 1; $x <= $max; $x++){
		if($x%2 !== 0){
			$result[] = $x;
		}
	}
	
	return $result;
}

echo '<pre>';
var_export(genap(20));
echo '</pre>';

echo '<pre>';
var_export(ganjil(20));
echo '</pre>';
?>