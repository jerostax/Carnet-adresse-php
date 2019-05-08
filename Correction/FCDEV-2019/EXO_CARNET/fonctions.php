<?php 
# Connexion à la BDD
$db = new PDO('mysql:host=localhost;dbname=school', 'root', 'root');
# Réglages d'attribut pour la connexion
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // PDO::FETCH_OBJ -- PDO::FETCH_NUM -- PDO::FETCH_ASSOC
$db->exec('set names utf8');
