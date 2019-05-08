<?php
require 'connexion.php';

// Execution de la requete
$id = $_GET['id']; // On récupère l'id qui se trouve dans l'URL
$sql = "DELETE FROM membres WHERE id = :id";
$delete = $db->prepare($sql);
// $delete->execute(array(':id' => $id));
$delete->bindparam(':id', $id, PDO::PARAM_INT);
$delete->execute();

//echo '<a href="list.php">Revenir à la liste</a>';
header('location: list.php');


