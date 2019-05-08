<?php
## Fichier modifier.php

# on inclu le fichier de fonctions (et de connexion) :
require "fonctions.php";

# on vérifie si le formulaire à été envoyé
if(!empty($_POST['submit']))
{
	# on récupère les donnée postés dans le formulaire
	$id			= $_POST['id'];
	$prenom		= $_POST['prenom'];
	$nom		= $_POST['nom'];
	$email		= $_POST['email'];
	$adresse	= $_POST['adresse'];
	$cp			= $_POST['cp'];
	$ville		= $_POST['ville'];
	$tel		= $_POST['tel'];
	$nele		= $_POST['nele'];
	# Remarque : on aurait aussi pu utiliser extract() à la place
	
	# on met à jour les données dans la BDD
	$sql = "UPDATE membres 
			SET 
				prenom		= :prenom, 
				nom			= :nom, 
				email		= :email, 
				adresse		= :adresse, 
				cp			= :cp, 
				ville		= :ville, 
				tel			= :tel,
				naissance	= :nele
			WHERE id		= :id";
			
	try 
	{
		# On lance la préparation de la requête
		$update = $db->prepare($sql);
		
		# On lie les valeurs aux marquers de la requête
		$update->bindparam(':id', $id, PDO::PARAM_INT);
		$update->bindparam(':prenom', $prenom, PDO::PARAM_STR);
		$update->bindparam(':nom', $nom, PDO::PARAM_STR);
		$update->bindparam(':email', $email, PDO::PARAM_STR);
		$update->bindparam(':adresse', $adresse, PDO::PARAM_STR);
		$update->bindparam(':cp', $cp, PDO::PARAM_STR);
		$update->bindparam(':ville', $ville, PDO::PARAM_STR);
		$update->bindparam(':tel', $tel, PDO::PARAM_STR);
		$update->bindparam(':nele', $nele, PDO::PARAM_STR);
		
		# On exécute la requête
		$update->execute();
	} 
	catch (Exception $e) 
	{
		# En cas d'erreur, on stoppe le script et on affiche un message
		die($e->getMessage());
	}
	
	# on se redirige vers la liste des contacts
	header("location: liste.php");
}

// on vérifie qu'un ID est bien envoyé :
// si oui, on initialise la variable $id.
if(!empty($_GET['id'])) $id = $_GET['id'];
// si non, on redirige automatiquement sur la liste.
else header("location: liste.php");

// on récupère les données du contact sélectionné :
$getUserDatas = "SELECT * FROM membres WHERE id = :id";
try
{
	$req = $db->prepare($getUserDatas);
	$req->bindParam(':id', $id, PDO::PARAM_INT);
	$req->execute();
}
catch (Exception $e)
{
	$e->getMessage();
}

// Pas besoin de boucle, nous n'avons qu'une fiche à afficher, on récupère donc les données :
$data = $req->fetch();

$nom		= $data->nom;
$prenom		= $data->prenom;
$email		= $data->email;
$adresse	= $data->adresse;
$cp			= $data->cp;
$ville		= $data->ville;
$tel		= $data->tel;
$nele		= $data->naissance;

# On inclu la vue correspondante (formulaire de modification) :
include 'vues/modifier_contact.tpl.php';
