<?php 

function generate($dim)
{
	$grid = [];
	for ($l=0; $l < $dim; $l++) {
		$grid[$l] = [];
		for ($c=0; $c<$dim; $c++) {
			/* $l +$c permet de compter toutes les cellules du tableau
			0,1,2,3,4 ... $n-1, pensez à mettre des parenthèses autour de ($l + $c) avant de faire le modulo pour faire la somme avant le modulo */
			$color= (($l+$c)%2==0)?"#000":"#FFF"; $grid[$l][$c] = $color;
		}
	}
	return $grid;
}

$grid = generate(5);


echo '<div style="width:500px">'; // on englobe les boucles qui génèrent les case noires & blanches par une div générale

foreach ($grid as $key => $value) {
	foreach ($value as $color) {
		echo '<div style="background-color:'.$color.';width:100px;height:100px;display:inline-block">'.$color.'</div>';
	}
}

echo '</div>'; // find e la div générale


echo '<pre>';
print_r($grid);
echo '</pre>';