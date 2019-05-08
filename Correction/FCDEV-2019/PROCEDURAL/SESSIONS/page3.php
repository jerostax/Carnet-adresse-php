<?php 
session_start(); // le plus haut possible dans la page

echo 'Rebonjour '.$_SESSION['prenom'];