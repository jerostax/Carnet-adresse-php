<?php
require 'connexion.php';

// Execution de la requete
$sql = 'SELECT prenom, nom, email, id FROM membres ORDER BY nom';
$req = $db->query($sql);

$i = 0;
$html = '<table>';
$html .= '<tr style="background-color:grey"><th>Prénom nom</th><th></th><th></th></tr>';
while ($data = $req->fetch()) {

    // if      ($i%3 ==0 )  $couleur = 'lightblue';
    // else if ($i%3 ==1 )  $couleur = 'darkred';
    // else                 $couleur = 'darkgreen';                OU 

    $tabCouleur = ['lightblue', 'darkgreen'];
    $couleur = $tabCouleur[$i%count($tabCouleur)];

    $html .=  '<tr style="background-color:'.$couleur.'">';
    $html .=  '<td>';

    if ($data->email == true) { // ou (!empty($data->email))
        $html .=  "<a href='mailto:".$data->email."'>".$data->prenom.' '.$data->nom.'<a/>';  // "<a href=mailto:".$data->mail.">" ??
    }else {
        $html .=  $data->prenom.' '.$data->nom;
    }

    $html .=  '</td>';
    $html .=  '<td><a href="modifier.php?id='.$data->id.'">Modifier</a></td>';
    $html .=  '<td><a href="supprimer.php?id='.$data->id.'">Supprimer</a></td>';
    $html .=  '</tr>';
    $i++;
}
$html .=  '</table>';

include 'vues/list-contact.php';