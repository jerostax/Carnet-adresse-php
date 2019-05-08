<?php 

# Page supprimer.php

# Connexion à la BDD
require 'fonctions.php';

# Exécuter la requête pour virer le contact dans la BDD
$id	=	$_GET['id']; // on récupère l'id qui se trouve dans l'URL

$sql = "DELETE FROM membres WHERE id = :id";
$delete = $db->prepare($sql);
$delete->bindparam(':id', $id, PDO::PARAM_INT);
$delete->execute();

# Redirection vers liste.php
header('location: liste.php');
