<?php
require 'connexion.php';//connexion à la bdd...

if(!empty($_POST['submit'])) {
    //on a envoyé le formulaire, on va enregistrer les données
    // $nom  = $_POST['nom'];
    // $prenom = $_POST['prenom'];
    // $email  = $_POST['email'];
    // $adresse  = $_POST['adresse'];
    // $cp  = $_POST['cp'];
    // ville, tel, nele....
    // OU 
    extract($_POST);

    $sql = 'INSERT INTO membres VALUES (
        null, 
        :prenom,
        :nom,
        :email,
        :adresse,
        :cp,
        :ville,
        :tel,
        :nele,
        NOW())';  //Date d'inscription (Aujorud'hui donc)

$insert = $db->prepare($sql);
$insert->bindparam(':prenom', $prenom, PDO::PARAM_STR);
$insert->bindparam(':nom', $nom, PDO::PARAM_STR);
$insert->bindparam(':email', $email, PDO::PARAM_STR);
$insert->bindparam(':adresse', $adresse, PDO::PARAM_STR);
$insert->bindparam(':cp', $cp, PDO::PARAM_STR);
$insert->bindparam(':ville', $ville, PDO::PARAM_STR);
$insert->bindparam(':tel', $tel, PDO::PARAM_STR);
$insert->bindparam(':nele', $nele, PDO::PARAM_STR);
$insert->execute();

header('location: list.php');
}





// On affiche le formulaire 
include 'vues/ajouter-contact.php';