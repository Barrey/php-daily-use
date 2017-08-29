<?php

function palindromeIndex($s){
    // Complete this function
	// Break input line by line
    foreach(preg_split("/((\r?\n)|(\r\n?))/", $s) as $line){
        // do stuff with $line
        $str = trim($line);
        $str = str_split($str);

          $str_idx = '-1';
          $str_cnt = count($str);
          $h_cnt = intval($str_cnt / 2);
          $h_mod = $str_cnt % 2;
          $j = $str_cnt-1; 
          
          for ($i = 0; $i < $str_cnt; $i++) {
            
            if($str[$i]!=$str[$j])
                {
                if($i < ($str_cnt-1)){
                    //compare current with last / next
                    if($str[$i]!=$str[$i+1]){
                        echo $i;
                        break;
                    }    
                }
                else{
                    //compare last with previous
                    if($str[$i]!=$str[$i-1]){
                        echo $i;
                        break;
                    } 
                }
                
            }
              
            if($i == $str_cnt-1 && $str[$i]==$str[$j]){
                echo '-1';
                break;
            }
            
            $j--;
          }
          
    } 
}

$input = <<<EOD
aaac
daa
ccc
EOD;

palindromeIndex($input);

?>