<?php 

# ^ ==> "Commence par"
# $ ==> "fini par (ce qu'il y a juste avant le $)"
# [^] ==> "ne contient pas ce qui est dans les crochets" ex : [^abc] = ne contient ni a, ni b, ni c

# [a-z] ==> n'importe quel caractère entre a et z, en minuscule
# [A-Z] ==> n'importe quel caractère entre a et z, en majuscule
# [0-9] ==> n'importe quel chiffre entre 0 et 9

# [a-zA-Z0-9] ==> n'importe quel caractère alphanumérique (SAUF caractères accentués)
# [ahbk76/\?\.\-] ==> un de ces caractères là

# . (point) ==> n'importe quel caractère
# \ ==> permet d'échapper des caractères
# | (pipe) ==> "ou bien"

# () ==> parenthèses "capturantes" permet de cherche un ensemble de données, et ça permet de les réutiliser
# [] ==> intervales ; choix de caractères …

# ? ==> 0 ou 1 fois
# + ==> au moins 1 fois
# * ==> 0, 1 ou plusieurs fois


# ============
# = Exemples =
# ============

$chaine = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LoUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

# Fonction pour remplacer des caractères
# preg_replace(motif en Regex, chaine de remplacement, la chaine à traiter);
# echo preg_replace('#^Lo#', 'toto', $chaine);
# echo preg_replace('#Lo#', 'toto', $chaine).'<br>';
# Recherche une chaine commençant par "Lo" ou "lo" (car insensible à la casse grace au 'i'), et la remplace par "toto" :
# echo preg_replace('#Lo#i', '<strong>toto</strong>', $chaine).'<br>';

# Remplace tous les "ae" ou "eu" par "O" :
# echo preg_replace('#ae|eu#', 'O', $chaine).'<br>';

# Remplace tous les "a" ou "e" par "O" :
# echo preg_replace('#a|e#', 'O', $chaine).'<br>';
# echo preg_replace('#[ae]#i', 'O', $chaine).'<br>';

# Repère tous les "a" ou "e" et remplace par eux-même, en rouge :
# echo preg_replace('#([ae])#i', '<span style="color:red">$1</span>', $chaine).'<br>'; // $1 = on remplace la parenthèse n°1
# echo preg_replace('#(ae)#i', '<span style="color:red">$1</span>', $chaine).'<br>';
# echo preg_replace('#[ae]#i', '<span style="color:red">$0</span>', $chaine).'<br>'; // $0 = on remplace TOUT le motif


$chaine2 = 'Dis moi gros gras grand grin d\'orge, quand te degrosgrasgrandgrin d\'orgeras-tu ? Je me degrosgrasgrandgrin d\'orgerai quand tous les gros gras grand grin d\'orge se seront degrosgrasgrandgrin d\'orge';

# Repèrer les chaines de caractères contenant "gr", suivi de "a","i" ou "o", suivi de "s" ou "n" et enfin éventuellement suivi d'un "d", et les mettre en italique.
# echo preg_replace('#gr[aio][sn]d?#i', '<em>$0</em>', $chaine2).'<br>';
# echo preg_replace('#(gr[aio][sn]d?)#', '<em>$1</em>', $chaine2).'<br />';

# Repèrer les chaines de caractères contenant "gr", suivi de "as" ou "in" ou "os", éventuellement suivi d'un "d", et les remplacer par "as" ou "in" ou "os" en italique.
# echo preg_replace('#gr(as|in|os|an)d?#i', '<em>$1</em>', $chaine2).'<br>';

# Repèrer les chaines de caractères contenant "gr", suivi d'une lettre entre "a" et "i", suivi peut-être de "s" ou "n" et enfin éventuellement suivi d'un "d", et les mettre en italique.
# echo preg_replace('#gr[a-i][sn]?d?#i', '<em>$0</em>', $chaine2).'<br>';

# Repèrer les chaines de caractères contenant "gr", suivi d'une lettre entre "a" et "i", suivi peut-être de "s" ou "n" et enfin éventuellement suivi d'un "d", et mettre en italique le tout, en gras les lettres entre a et i, en rouge le s ou n.
# echo preg_replace('#gr([a-i])([sn]?)(d?)#i', '<em>gr<b>$1</b><span style="color:red">$2</span>$3</em>', $chaine2).'<br>';

$chaine3 = 'Babarrrrrrrrrr';
# Repère "Baba" suivi de 3 "r"
# echo preg_replace('#Babar{3}#', '<span style="color:red">$0</span>', $chaine3).'<br /><br />';

$chaine4 = 'il fait pas beau à Paris';
# Repère 3 lettres à la suite (sans espace donc)
echo preg_replace('#[a-z]{3}#i', '<span style="color:red">$0</span>', $chaine4).'<br /><br />';

# Repère entre 3 et 4 lettres à la suite, suivies d'un espace
echo preg_replace('#[a-z]{3,4}\s#i', '<span style="color:red">$0</span>', $chaine4).'<br /><br />';

echo preg_replace('#[a-z]{3,}#i', '<span style="color:red">$0</span>', $chaine4).'<br /><br />'; // au moins 3 lettres

# Repère un espace, suivi de "f", puis de n'importe quels caractères, puis d'un "t" et enfin d'un espace
echo preg_replace('#\sf.*t\s#i', '<span style="color:red">$0</span>', $chaine4).'<br /><br />';


$texte = "j'aime bien les bananes et les concombres, mais pas les fraises";
$recherche = ['#bananes#', '#fraises#', '#concombres#'];
$remplace = ['fruits jaunes', 'fruits rouges', 'légumes verts'];
echo preg_replace($recherche, $remplace, $texte).'<br><br>';

$texte = "Espèce de batard d'enculé de sale fils de pute";
$recherche	= ['#batard#','#enculé#','#pute#'];
# $remplace = '************';
$remplace = ['mélange', 'passif', 'plage'];
echo preg_replace($recherche, $remplace, $texte).'<br><br>';

$string = 'fraise,bananes;choux fleur,carottes';
# print_r(explode(',',$string));
print_r(preg_split('#[,; ]#',$string));

echo '<br><br>';

# Filtrer dans une chaine de caractère, un mail et le faire cliquable

$texte = 'Mon email est blagues.a-toto@toto-land.to';
$recherche = '#[a-z0-9]+([\.\_\-][a-z0-9]+)*@[a-z0-9]+([\.\-][a-z0-9]+)*\.[a-z]{2,}#i';
$remplace = '<a href="mailto:$0">$0</a>';
echo preg_replace($recherche, $remplace, $texte);
echo '<br><br>';


# preg_match()
# preg_match_all()


$texte = 'fraise,bananes;choux fleur,carottes';

# preg_match()
echo preg_match('#a#', $texte);

# preg_match_all()
$texte2 = 'Mon email est blagues.a-toto@toto-land.to. Mon email est toto@plop.com, celui de Ron est ron.winsley@hogwarts.co.uk';

$recherche = '#[a-z0-9]+([\.\_\-][a-z0-9]+)*@[a-z0-9]+([\.\-][a-z0-9]+)*\.[a-z]{2,}#i';

echo '<pre>';
print_r(preg_match_all($recherche, $texte2, $matches));
echo '</pre>';

echo '<pre>';
print_r($matches);
echo '</pre>';

echo $matches[0][1]; // accès direct au sous-tableau

// Version décomposée :
echo '<pre>';
print_r($matches[0]);
echo '</pre>';

$listeDesMails = $matches[0];
echo $listeDesMails[1];















