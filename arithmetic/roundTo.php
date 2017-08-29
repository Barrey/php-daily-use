<?php

function roundTo($number, $round){
	return ceil($number/$round)*$round;
}

echo roundTo(100,500);
?>