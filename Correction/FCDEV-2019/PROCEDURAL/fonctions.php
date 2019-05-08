<?php 
# Les fonctions (perso)

define('prenom', 'Guillaume');

function maFonction($arg1, $arg2, $arg3)
{
	echo prenom;
	return $arg1 + $arg2 * $arg3;
}

echo maFonction(1, 2, 3);
echo $arg1;


function tirage($nbBouboulesATirer, $valeurMax)
{
	# $nbBouboulesATirer = 5;
	# $valeurMax = 49;

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

	return implode(' - ', $loto);
}

echo tirage(5, 49);
