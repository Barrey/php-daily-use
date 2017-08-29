<?php
//return fibonacci array 
function fibonacci($n){
	$first = 0;
	$second = 1;
	
	$result = array($first,$second);
 
  for($i = 2; $i < $n; $i++){
 
    $third = $first + $second;
 
    $result[] = $third;
 
    $first = $second;
    $second = $third;
 
    }
	
	return $result;
}

echo '<pre>';
var_export(fibonacci(10));
echo '</pre>';