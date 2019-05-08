<?php 

$fichiers = scandir('./');

echo '<pre>';
print_r($fichiers);
echo '</pre>';

# Tri des noms des fichiers par ordre croissant sans tenir compte de la casse
natcasesort($fichiers);

foreach ($fichiers as $val)
{
	if (preg_match('#^[^\.]#', $val))
	{
		if (is_dir($val)) 	echo $val.'/<br>';
		else 				echo $val.'<br>';
	}
}