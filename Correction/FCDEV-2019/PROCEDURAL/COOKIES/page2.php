<?php 

setcookie('prenom', $_POST['prenom'], time()+3600*24*365);
echo time();
echo '<pre>';
print_r($_POST);
echo '</pre>';

echo 'Bonjour '.$_POST['prenom'];