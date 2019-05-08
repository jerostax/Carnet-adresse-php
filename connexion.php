<?php
// Connexion à la BDD
$db = new PDO('mysql:host=localhost;dbname=school', 'root', '');

// Réglage d'atribut pour la connexion 
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    //PDO::FETCH_ARRAY (récupere les infos de la bdd dans des tableaux associatifs + numératif)  ---  PDO::FETCH_NUM  (pareil dans un tableau numératif --- FETCH-ASSOC (dans un tableau associatif)
$db->exec('SET names utf8');