<?php

# =======
# = PDO =
# =======

#			Type de BDD    serveur     nom de la BDD,  user ,  Pass
$db = new PDO('mysql:host=localhost;dbname=coursphp', 'root', 'root');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);



# ==========
# = SELECT =
# ==========
/*
$sql = 'SELECT * FROM membres';
$req = $db->query($sql);



# while ($data = $req->fetch(PDO::FETCH_OBJ))
# {
# 	# echo '<pre>';
# 	# var_dump($data);
# 	# echo '</pre>';
#
# 	echo $data->prenom.' '.$data->nom.'<br>';
# }

$data = $req->fetchAll(PDO::FETCH_OBJ);
# echo '<pre>';
# var_dump($data);
# echo '</pre>';

# foreach ($data as $membre)
# {
# 	echo $membre->prenom.' '.$membre->nom.'<br>';
# }

echo $data[0]->prenom; // on peut aussi aller chercher direct un élément
*/
# ==========
# = UPDATE =
# ==========
/*
$sql = 'UPDATE membres SET nom = "toto" WHERE id = ?';

# $res = $db->exec($sql);

# echo '<pre>';
# var_dump($res);
# echo '</pre>';

$req = $db->prepare($sql);
$insert = [5];
$req->execute($insert);

# ==========
# = INSERT =
# ==========

$sql = "INSERT INTO membres (nom, prenom) VALUES (?, ?)";
$req = $db->prepare($sql);
$insert = ['henot', 'guillaume'];
$req->execute($insert);



$sql = "INSERT INTO membres (nom, prenom) VALUES (:nom, :prenom)";
$req = $db->prepare($sql);
$insert = [
		'nom'=>'henot', 
		'prenom'=>'guillaume'
		];
$req->execute($insert);
*/

# ------------------------------------------- #


$id = 12;
$nom = 'toto';
$ville = 'New-York';

# $sql = "SELECT * FROM membres WHERE id = ? OR nom = ? OR ville = ?";
#
# $req = $db->prepare($sql);
# $req->bindParam(1, $id);
# $req->bindParam(2, $nom);
# $req->bindParam(3, $ville);
# $req->execute();

$sql = "SELECT * FROM membres WHERE id = :id OR nom = :nom OR ville = :ville";

$req = $db->prepare($sql);
$req->bindParam('id', $id);
$req->bindParam('nom', $nom);
$req->bindParam('ville', $ville);
$req->execute();

# while ($data = $req->fetch(PDO::FETCH_ASSOC))
while ($data = $req->fetch(PDO::FETCH_OBJ))
{
	# echo $data['prenom'].'<br/>';
	echo $data->prenom.' '.$data->nom.'<br/>';
}




