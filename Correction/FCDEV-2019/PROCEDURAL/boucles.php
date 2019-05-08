<?php

# Les boucles
$j = 0;
while ($j <= 10) // < > == === != <= >= 
{
	echo $j.'<br>';
	$j++;
}

for ($i=0; $i < 10; $i++)
{
	echo $i.' - Je ne dois pas aller sur FB pendant le cours<br>';
}

$tab = ['rouge','jaune','vert','bleu'];
foreach ($tab as $val)
{
	echo $val.'<br>';
}


$tab2 = [
		'nom' => 'HENOT',
		'prenom' => 'Guillaume',
		'ecole' => "LEM",
		];
foreach ($tab2 as $key => $val)
{
	echo $key.' : '.$val.'<br>';
}
