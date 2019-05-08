<?php
# Connexion à la BDD
$db = new PDO('mysql:host=localhost;dbname=school', 'root', 'root');
# Réglages d'attribut pour la connexion
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // PDO::FETCH_OBJ -- PDO::FETCH_NUM -- PDO::FETCH_ASSOC
$db->exec('set names utf8');

# Execution de la requete
$sql = "SELECT prenom, nom FROM membres ORDER BY nom";
$req = $db->query($sql);

# Traitement des données (pour affichage)
while ($data = $req->fetch())
{
	# echo '<pre>';
	# print_r($data);
	# echo '</pre>';
	# echo $data->prenom.' '.$data->nom.'<br>';
}


echo '<br/><br/><br/>';
$id = 12;

$sql = "SELECT * FROM membres WHERE id = :id";
$req = $db->prepare($sql);
$req->execute(array(':id' => $id));

# $req = $db->query($sql);
$data = $req->fetch();
echo '<pre>';
print_r($data);
echo '</pre>';


echo '<br/><br/><br/>';
$id = 12;
$nom = 'Cooper';
$ville = 'New-York';

$sql = "SELECT * FROM membres WHERE id = ? OR nom = ? OR ville = ?";
$req = $db->prepare($sql);
$req->bindParam(1, $id);
$req->bindParam(2, $nom);
$req->bindParam(3, $ville);
$req->execute();

while ($data = $req->fetch())
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}


