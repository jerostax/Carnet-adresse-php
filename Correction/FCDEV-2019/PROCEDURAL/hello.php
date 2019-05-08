<?php
/*
echo "hello world<br>\n";
echo "hello world";
echo 'hello world\n';

$prenom = 'Guillaume';

echo "Hello $prenom";

define('nom', 'HENOT');
echo nom; // pas de $ devant une constante

$prenom = 11; // on redéfini la variable $prenom
define('nom', 11); # on tente de redéfinir la constante (mais ça marche pas)
echo $prenom;
*/
/*

commentaire

*/

# Variables tableau
# $tab = array();
# $tab = [];
$tab = ['rouge','jaune','vert','bleu'];
# echo $tab;
echo $tab[0];

$tab2 = [
		'nom' => 'HENOT',
		'prenom' => 'Guillaume',
		'ecole' => "LEM",
		];
		/*
echo $tab2['prenom'];

echo '<br><br>';

echo '<pre>';
print_r($tab2);
echo '</pre>';

rsort($tab2);

echo '<pre>';
print_r($tab2);
echo '</pre>';

echo count($tab2);
*/
# Ajouter un élément dans un tableau
array_push($tab, 'violet', 'blanc');

echo '<pre>';
print_r($tab);
echo '</pre>';

$tab[] = 'noir';

echo '<pre>';
print_r($tab);
echo '</pre>';

$tab2['metier'] = 'prof'; // nouvelle entrée (avec une nouvelle clé)
$tab2['nom'] = 'TOTO'; // attention, ici on va remplacer la valeur de la clé "nom"

echo '<pre>';
print_r($tab2);
echo '</pre>';

# Supprimer un élément du tableau :
# Le dernier élément
array_pop($tab);
echo '<pre>';
print_r($tab);
echo '</pre>';

# Un élément particulier (il faut connaitre sa clé)
unset($tab[4]); // vire le violet
echo '<pre>';
print_r($tab);
echo '</pre>';


$listeDeCourses = 'nesquick,quinoa,carotte,biere,pizza';
$tabCourses = explode(',', $listeDeCourses);
echo '<pre>';
print_r($tabCourses);
echo '</pre>';
sort($tabCourses);
echo '<pre>';
print_r($tabCourses);
echo '</pre>';

echo implode(',', $tabCourses);

