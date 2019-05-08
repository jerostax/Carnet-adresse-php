<?php 

$numbers = [1,2,3,4,5,6];

$odds = array_filter($numbers, function($toto) {
	return (($toto%2 == 1) == true) ? true : false;
});

echo '<pre>';
var_dump($odds);
echo '</pre>';


