<?php 

# Fichier ajouter.php

# Connexion BDD
require 'fonctions.php';

if (!empty($_POST['submit']))
{
	# on a donc envoyé le formulaire, on va enregistrer les données
	# $nom		= $_POST['nom'];
	# $prenom		= $_POST['prenom'];
	# $email		= $_POST['email'];
	# $adresse	= $_POST['adresse'];
	# $cp			= $_POST['cp'];
	# $ville		= $_POST['ville'];
	# $tel		= $_POST['tel'];
	# $nele		= $_POST['nele'];
	extract($_POST);
	
	$sql = "INSERT INTO membres 
				VALUES (null, -- Champs ID
						:prenom,
						:nom,
						:email,
						:adresse, 
						:cp, 
						:ville, 
						:tel,
						:nele,
						NOW())"; // Date d'inscription (aujourd'hui donc)
						
	$insert = $db->prepare($sql);
	# On lie les valeurs aux marqueurs de la requête
	$insert->bindparam(':prenom', $prenom, PDO::PARAM_STR);
	$insert->bindparam(':nom', $nom, PDO::PARAM_STR);
	$insert->bindparam(':email', $email, PDO::PARAM_STR);
	$insert->bindparam(':adresse', $adresse, PDO::PARAM_STR);
	$insert->bindparam(':cp', $cp, PDO::PARAM_STR);
	$insert->bindparam(':ville', $ville, PDO::PARAM_STR);
	$insert->bindparam(':tel', $tel, PDO::PARAM_STR);
	$insert->bindparam(':nele', $nele, PDO::PARAM_STR);
	
	$insert->execute();
	
	//header("location: liste.php");
	
}




# On affiche le formulaire
include 'vues/ajouter_contact.tpl.php';