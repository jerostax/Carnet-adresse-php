<?php
# on inclu les fonctions (et la connexion) 
require "fonctions.php";

# Si la variable $_GET['id'] n'est pas définie ou si elle est vide (si donc on ne reçoit rien),
# On redirige vers la liste
if(empty($_GET['id']))		header("location: liste.php");
# Sinon on stocke la valeur de $_GET['id'] dans la variable $id
else						$id	=	$_GET['id'];

### Récupération de la confirmation ###
if(!empty($id) && !empty($_GET['validation']))
{
	# Si la validation est "oui", on efface la fiche dans la BDD
	if($_GET['validation'] == 'oui')
	{
		# On efface les données
		$sql = "DELETE FROM membres WHERE id=:id";
		
		$delete = $db->prepare($sql);
		$delete->bindparam(':id', $id, PDO::PARAM_INT); // avec la contante PDO::PARAM_INT, on force la vérification que c'est un INT
		$delete->execute();
		
		# C'est bon, on redirige vers la liste.
		header("location: liste.php");
	}
	# Sinon on redirige direct vers la liste.
	else
	{
		header("location: liste.php");
	}
}

# Si on a pas encore confirmé, alors la page affiche le texte et les liens de confirmation

# On inclu la vue correspondante (formulaire d'ajout) :
include 'vues/supprimer_contact.tpl.php';
