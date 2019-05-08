<?php 

$texte = 'Je sais <strong>écrire</strong> dans un fichier';
$fichier = 'fichier.txt';

$f = fopen($fichier, 'w'); // r, r+, w, w+, a, a+
fwrite($f, $texte);
fclose($f);

echo 'plop';