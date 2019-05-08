<?php 
$nbBouboulesATirer = 5;
$valeurMax = 49;

$loto = [];

while(count($loto) < $nbBouboulesATirer)
{ 
	$num = rand(1, $valeurMax);
	if(!in_array($num, $loto))
	{
		$loto[] = $num;
	}

}
sort($loto);

echo implode(' - ', $loto);