<?php
# Connexion à la BDD
require 'fonctions.php';

# Execution de la requete
$sql = "SELECT prenom, nom, email, id FROM membres ORDER BY nom";
$req = $db->query($sql);

# Traitement des données (pour affichage)
$i = 0;
$html = '<table>';
$html .= '<tr style="background-color:green">
		<th>Prénom nom</th>
		<th></th>
		<th></th>
	</tr>';
while ($data = $req->fetch())
{
	# if($i%7 == 0) 	$couleur = 'lime';
	# elseif($i%7 == 1) $couleur = 'yellow';
	# elseif($i%7 == 2) $couleur = 'blue';
	# elseif($i%7 == 3) $couleur = 'green';
	# elseif($i%7 == 4) $couleur = 'cyan';
	# elseif($i%7 == 5) $couleur = 'red';
	# else 			$couleur = 'pink';

	$tabCouleur = ['lime','yellow','blue','green','cyan','red','pink','orange'];
	$couleur = $tabCouleur[$i%2];
	
	$html .= '<tr style="background-color:'.$couleur.'">';
	$html .= '<td>';
	
	if (!empty($data->email))
	{
		$html .= '<a href="mailto:'.$data->email.'">'.$data->prenom.' '.$data->nom.'</a>';
	}
	else
	{
		$html .= $data->prenom.' '.$data->nom;
	}
	
	$html .= '</td>';
	$html .= '<td><a href="modifier.php?id='.$data->id.'">Modifier</a></td>';
	$html .= '<td><a href="supprimer.php?id='.$data->id.'">Supprimer</a></td>';
	$html .= '</tr>';
	$i++;
}
$html .= '</table>';

include 'vues/liste_contacts.tpl.php';