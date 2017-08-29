<?php
function bilangan_prima($x){
	for($i=1; $i<=$x;$i++){
		$a = 0;
		for($j=1; $j<=$i;$j++){
			if($i % $j == 0){
				$a++;
			}
		}
		
		if($a == 2){
			echo $i;
			echo "<br/>";
		}
		
	}
}

$max_angka = 11;
bilangan_prima($max_angka);

?>