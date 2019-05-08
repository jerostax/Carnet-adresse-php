<?php
## Fichier ajouter.php, pour ajouter des contacts

# on inclu le fichier de fonctions (et de connexion) :
require "fonctions.php";

# on vérifie si le formulaire à été envoyé
# Mon bouton "Submit" a un nom (submit) et une valeur
if(!empty($_POST['submit']))
{ 
	# on récupère les données postées dans le formulaire
	$nom		= $_POST['nom'];
	$prenom		= $_POST['prenom'];
	$email		= $_POST['email'];
	$adresse	= $_POST['adresse'];
	$cp			= $_POST['cp'];
	$ville		= $_POST['ville'];
	$tel		= $_POST['tel'];
	$nele		= $_POST['nele'];
	# Remarque : on aurait aussi pu utiliser extract($_POST) à la place
	
	# On ajoute les données dans la BDD
	# mysqli_real_escape_string() permet d'échapper les caratères potentiellement dangereux (injections SQL)
	# Elle nécessite 2 arguments : l'identifiant de connexion (ici $con) et la valeur à filtrer.
	$sql = "INSERT INTO membres 
				VALUES (null, -- champ ID
						:prenom, 
						:nom, 
						:email, 
						:adresse, 
						:cp, 
						:ville, 
						:tel,
						:nele,
						NOW())"; // Date d'inscription (aujourd'hui donc)
						
	try 
	{
		# On lance la préparation de la requête
		$insert = $db->prepare($sql);

		# On lie les valeurs aux marqueurs de la requête
		$insert->bindparam(':prenom', $prenom, PDO::PARAM_STR);
		$insert->bindparam(':nom', $nom, PDO::PARAM_STR);
		$insert->bindparam(':email', $email, PDO::PARAM_STR);
		$insert->bindparam(':adresse', $adresse, PDO::PARAM_STR);
		$insert->bindparam(':cp', $cp, PDO::PARAM_STR);
		$insert->bindparam(':ville', $ville, PDO::PARAM_STR);
		$insert->bindparam(':tel', $tel, PDO::PARAM_STR);
		$insert->bindparam(':nele', $nele, PDO::PARAM_STR); // attention selon les versions de MySQL (a vérifier !)

		# On exécute la requête
		$insert->execute();
	} 
	catch (Exception $e) 
	{
		# En cas d'erreur, on stoppe le script et on affiche un message
		die($e->getMessage());
	}

	# on se redirige vers la liste des contacts
	# ATTENTION, la fonction header ne fonctionnera que s'il n'y a pas eu autre chose avant
	# (ex : partie HTML, echo, print(), ou tout autre trucs qui aurait affiché quelque chose
	# dans le navigateur)
	header("location: liste.php");
}

# On inclu la vue correspondante (formulaire d'ajout) :
include 'vues/ajouter_contact.tpl.php';
