<?php
function is_anagram($a, $b){
    return(count_chars($a, 1) == count_chars($b, 1));
}

$word1= "Anabelle";
$word2= "bellAnae";

//not an anagram
$word3= "bellanae";

if(is_anagram($word1,$word2)){
	echo "these words are anagram";
}
else{
	echo "these words not an anagram";
}
?>