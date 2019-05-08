<?php 

# fichier modifier.php

require 'fonctions.php';

if (!empty($_POST['submit']))
{
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	extract($_POST);
	
	
	$modifierUserDatas = "UPDATE membres SET
							prenom 		= :prenom,
							nom 		= :nom,
							email 		= :email,
							adresse 	= :adresse,
							cp 			= :cp,
							ville 		= :ville,
							tel 		= :tel,
							naissance 	= :nele
						WHERE id 		= :id";
	
	$update = $db->prepare($modifierUserDatas);
	
	$update->bindparam(':id', $id, PDO::PARAM_INT);
	$update->bindparam(':prenom', $prenom, PDO::PARAM_STR);
	$update->bindparam(':nom', $nom, PDO::PARAM_STR);
	$update->bindparam(':email', $email, PDO::PARAM_STR);
	$update->bindparam(':adresse', $adresse, PDO::PARAM_STR);
	$update->bindparam(':cp', $cp, PDO::PARAM_STR);
	$update->bindparam(':ville', $ville, PDO::PARAM_STR);
	$update->bindparam(':tel', $tel, PDO::PARAM_STR);
	$update->bindparam(':nele', $nele, PDO::PARAM_STR);
	
	$update->execute();
	
	header("location: liste.php");
	
}	


$id = $_GET['id'];

$getUserDatas = "SELECT * FROM membres WHERE id = :id";
$req = $db->prepare($getUserDatas);
$req->bindParam(':id', $id, PDO::PARAM_INT);
$req->execute();

$data = $req->fetch();

$nom		= $data->nom;
$prenom		= $data->prenom;
$email		= $data->email;
$adresse	= $data->adresse;
$cp			= $data->cp;
$ville		= $data->ville;
$tel		= $data->tel;
$nele		= $data->naissance;

include 'vues/modifier_contact.tpl.php';