<?php 

echo '<pre>';
print_r($_POST);
print_r($_FILES);
echo '</pre>';

# déplacer le fichier vers notre dossier de site
move_uploaded_file($_FILES['fichier']['tmp_name'], $_FILES['fichier']['name']);

# dupliquer un fichier
$source = $_FILES['fichier']['name'];
$destination = 'copie de '.$_FILES['fichier']['name'];
copy($source, $destination);

# créer un sous-dossier
if (!file_exists('backup/'))
{
	mkdir('backup', 0777); // cherchez CHMOD sur wikipedia
}

if (!file_exists('backup/'.date('Y').'/'))
{
	mkdir('backup/'.date('Y'), 0777);
}

# Déplacer (ou renommer) un fichier dans le dossier
$nouveauNomPlace = 'backup/'.$destination;
rename($destination, $nouveauNomPlace);

# supprimer un fichier
unlink($source);












