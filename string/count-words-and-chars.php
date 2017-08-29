<?php

//count words and characters used

function countWords($words){
	$words_result = str_word_count($words, 1);
	$result = array();
	foreach($words_result as $key => $value){
		if(array_key_exists($value, $result)){
			$result[$value] += 1;
		}else{
			$result[$value] = 1;
		}
	}
	return $result;
}

function countChar($words){
	return count_chars($words,1);
}

$words = 'I Love You, My Darling. Do You know my Darling, I will always Love You forever.';

echo '<pre>';
echo var_export(countWords($words));
echo '</pre>';

foreach(countChar($words) as $k => $v){
	echo "penggunaan ".chr($k)." => sebanyak ".$v."<br/>";
}

?>