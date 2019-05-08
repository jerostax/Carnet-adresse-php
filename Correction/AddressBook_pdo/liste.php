<?php

// index.php

## on inclu le fichier de fonctions (et de connexion) 
require "fonctions.php";

# on fait notre requete
$sql= "SELECT id, nom, prenom, email FROM membres ORDER BY nom";
$mesContacts = $db->prepare($sql);
$mesContacts->execute();

# On prépare l'affichage d'un tableau HTML en initialisant la variable $html
# on lui ajoutera ensuite des partie grace à la concaténation (.=)
$html = '';

$i = 0;
# On affiche la liste des personnes triées par Nom
while($data = $mesContacts->fetch())
{
	// on récupère les valeurs des champs de la table
	// et on les stocke dans des variables
	$id		= $data->id;
	$nom	= $data->nom;
	$prenom = $data->prenom;
	$email	= $data->email;
	
	// ici, juste pour l'exercice, je construis un lien mailto sur le prénom du contact SI un email est entré en mémoire
	if($email != '')	$lienMail = '<a href="mailto:'.$email.'">'.$prenom.' '.$nom.'</a>';
	else 				$lienMail = $prenom.' '.$nom;
	
	// ici on fait en sorte de définir une couleur alternative pour les ligne du tableau (une ligne sur 2)
	// $i%2 se dit "$i modulo 2" c'est des math et ça veut dire "si le reste de $i divisé par 2"
	// ici donc, si le reste de la division de $i par 2 est égal à 0 alors $couleur = 'pair'
	// sinon, $couleur = 'impair'
	# if($i%2 == 0)	$couleur = 'pair';
	# else 			$couleur = 'impair';
	$T_couleurs = array('pair','impair');
	# $T_couleurs = array('#ffaaaa','#00ff66','#0000ff'); # ,'#999ccc','#ffffff'
	# $couleur 	= $T_couleurs[$i%3];
	$couleur 	= $T_couleurs[$i%count($T_couleurs)];
	
	// on affiche l'ensemble, formaté comme on veut
	// Syntaxe HEREDOC
	$html .= <<<TEXT
	<tr class="$couleur">
		<td>$lienMail</td>
		<td><a href="modifier.php?id=$id">Modifier</a></td>
		<td><a href="supprimer.php?id=$id">Supprimer</a></td>
	</tr>	
	
TEXT;
	
	$i++;
}

####### On aurait aussi pu faire : #######
# $data = $mesContacts->fetchAll();
### Puis faire un
# foreach($data as $membre)
# {
# 	// on récupère les valeurs des champs de la table
# 	// et on les stocke dans des variables
# 	// Attention, c'est bien $membre qu'il faut utiliser maintenant !!
# 	$id		= $membre->id;
# 	$nom	= $membre->nom;
# 	$prenom = $membre->prenom;
# 	$email	= $membre->email;
#
# ### Sans oublier le reste, tout ce qui est dans le while ci-dessus, de la ligne 28 à la ligne 54
# 
# }



# On inclu la vue correspondante (liste) :
include 'vues/liste_contacts.tpl.php';
