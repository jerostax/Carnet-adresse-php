<?php 
$fichier = 'breakingbad.json';

$json = file_get_contents($fichier);

$serie = json_decode($json);

echo '<pre>';
print_r($serie);
echo '</pre>';

echo $serie->cast->character[0]->name.' (<em>'.$serie->cast->character[0]->actor.'</em>)<br><br>';

foreach ($serie->cast->character as $char)
{
	echo $char->name.' (<em>'.$char->actor.'</em>)<br>';
}