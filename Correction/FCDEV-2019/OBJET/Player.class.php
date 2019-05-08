<?php 
/**
* Description
*/
class Player
{
	private $name;
	private $card;
	
	# Mémorise le nom du joueur à la création de l'objet
	function __construct($nom)
	{
		$this->name = $nom;
	}
	
	# Permet de récupérer le nom pour l'afficher dans le jeu
	public function getName()
	{
		return $this->name;
	}
	
	# Permet de mettre en mémoire la carte du joueur
	public function setCard($carte)
	{
		$this->card = $carte;
	}
	
	# Récupère la carte en mémoire pour l'afficher dans le jeu
	public function getCard()
	{
		return $this->card;
	}
}