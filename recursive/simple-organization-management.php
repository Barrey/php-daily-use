<?php

function org($arr, $start = null){
	if(is_array($arr)){
			
			$start = 1;
			$x = 1;
			
			
			foreach($arr as $k => $v){
				
				if(!is_null($start)){
					echo "<ul>";
				}
				
				if(is_array($v)){					

					if(!is_null($start)){
						echo $x." ";
					}
					
					echo $k.':<br/>';
					$result = org($v, true);
					
					$x = 1;
				}
				else{
					echo $x.' '.$v.'<br/>';
				}
				
				if(!is_null($start)){
					echo "</ul>";
				}
				
				$x++;
				$start++;
			}
	}
	
	else{
	
		return $result;
	
	}
}

$real_arr = array(
	'John' => array(
		'Beti' => array(
			'Joko' => array('Kusuma','Tika','Mustafa'),
			'Titin',
			'Desi'),
		'Tina','Riana'),
	'Leni' => array('Risma','Yoe','Itias')
);

org($real_arr);

?>