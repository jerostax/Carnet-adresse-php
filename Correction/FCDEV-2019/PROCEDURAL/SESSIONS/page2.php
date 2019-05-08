<?php 

session_start(); // le plus haut possible dans la page

$_SESSION['prenom'] = $_POST['prenom'];

echo '<pre>';
print_r($_POST);
print_r($_SESSION);
echo '</pre>';

echo 'Bonjour '.$_SESSION['prenom']; // utilisable tout de suite