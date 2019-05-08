<?php 
#
# echo '<pre>';
# print_r($_POST);
# echo '</pre>';

$image		= $_POST['image'];
$timbre 	= $_POST['timbre'];
$message 	= $_POST['message'];

# extract($_POST); // exactement pareil que les 3 lignes au dessus

# On récupère les largeur et hauteur des images
list($w_image, $h_image) = getimagesize('images/'.$image);
list($w_timbre, $h_timbre) = getimagesize('images/'.$timbre);
# $w_image = $plop[0];
# $h_image = $plop[1];
# echo '<pre>';
# print_r($plop);
# echo '</pre>';


# On créé les ressources images du fond et du timbre
$fondCarte = imagecreatefromjpeg('images/'.$image);
$timbreCarte = imagecreatefrompng('images/'.$timbre);

# On "colle" le timbre sur le fond de la carte
# Destination, source, position x sur destination, pos y sur destination, pos x dans source, pos y dans source, largeur dest, hauteur dest, largeur src, hauteur src
$x_timbre = $w_image - ($w_timbre + 25);
$y_timbre = 20;

imagecopyresampled($fondCarte, $timbreCarte, $x_timbre,$y_timbre,0,0,$w_timbre, $h_timbre, $w_timbre, $h_timbre);

# dimensions de la zone translucide :
$w_zone_transparente	= $w_image * 0.8;
$h_zone_transparente	= $h_image * 0.4;

# positionnement de la zone translucide
$x_zone_transparente = $w_image/2 - $w_zone_transparente/2;
$y_zone_transparente = 3/5 * $h_image - 30;

# Création de la ressource pour la zone translucide
$fond_transparent = imagecreate($w_zone_transparente, $h_zone_transparente);

# couleur de la zone translucide 				 R	 G	 B
$couleur = imagecolorallocate($fond_transparent,255,255,255);

imagecopymerge(
	$fondCarte, // destination
	$fond_transparent, // source
	$x_zone_transparente, // Pos x sur Destination
	$y_zone_transparente, // Pos y sur Destination 
	0, 0,  // Pos x,y dans la source
	$w_zone_transparente, // largeur dans la source
	$h_zone_transparente, // hauteur dans la source
	60 // opacité (60%)
);

# taille de la police
$taille = 20; // (en pixels)
# Angle du texte
$angle_texte = 0; // en degrés
# Positionnement du texte sur le fond
$x_depart = $x_zone_transparente + 10;
$y_depart = $y_zone_transparente + ($h_zone_transparente/2);
# Couleur du texte
$couleur_texte = imagecolorallocate($fondCarte,255,0,0);
# Typo utilisée (.ttf)
$font = __DIR__.'/palai.ttf';


imagettftext(	$fondCarte,
				$taille,
				$angle_texte,
				$x_depart,
				$y_depart,
				$couleur_texte,
				$font,
				$message //vient du formulaire
				);


# header('Content-type: image/jpeg');
# imagejpeg($fondCarte, null, 100);

# Pour enregistrer sur le serveur (par contre, ne s'affiche pas directement) :
imagejpeg($fondCarte, "ecard.jpg", 100);

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" />

	<title>Sans Titre</title>
	
</head>

<body>

<img src="ecard.jpg"/>

</body>
</html>






