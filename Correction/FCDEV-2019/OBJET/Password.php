<?php 

# Petit jeu :
# Créer une classe permettant de générer un mot de passe aléatoire
# Ce mot de passe peut contenir Minuscules, Majuscules, Chiffres, caractères spéciaux.
# Faites en sorte que la longueur soit variable (mais avec une valeur par défaut de 8 caractères)
# Vous pouvez faire en sorte qu'il n'y ai pas de caractères "trompeurs"


/**
* Description
*/
class Password
{
	private $chaine = 'bdghjlmnpqrstvwxzBDGHJLMNPQRSTVWXZaeiouyAEIOUY123456789@%!+-&';
	private $pass;
	private $longueur;
	
	# Initialisation de l'objet (on donne une longueur par défaut)
	function __construct($mdpLongueur = 8)
	{
		$this->longueur = $mdpLongueur;
	}
	
	# sert à générer un mot de passe aléatoire
	public function generate()
	{
		$longueurChaine = strlen($this->chaine)-1;
		for ($i=0; $i < $this->longueur; $i++)
		{ 
			# on concatène $this->pass avec elle même 
			$this->pass .= $this->chaine[rand(0, $longueurChaine)];
		}
	}
	
	# On appelle generate() et on retourne le mot de passe
	public function getNewPass()
	{
		$this->generate();
		return $this->pass;
	}
}

$pass = new Password(25);
echo $pass->getNewPass();









