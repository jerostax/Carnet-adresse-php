<?php

/**
* Description
*/
class Vehicule
{
	private $marque;
	protected $couleur;
	
	
	public function __construct($mark, $color)
	{
		$this->marque = $mark;
		$this->couleur = $color;
	}
	
	public function avancer()
	{
		echo 'le vehicule '.$this->couleur.' de marque '.$this->marque.' avance<br>';
	}
	
	public function reculer()
	{
		echo 'le vehicule '.$this->couleur.' de marque '.$this->marque.' recule<br>';
	}
	
}

$v1 = new Vehicule('Ford', 'Rouge');
# echo $v1->marque; // affiche Ford
$v1->avancer();
# $v1->marque = 'Ferrari';
$v1->avancer();

/**
* Description
*/
class Voiture extends Vehicule
{
	
	function __construct($mark, $color)
	{
		# $this->marque = $mark;
		# $this->couleur = $color;
		Vehicule::__construct($mark, $color);
	}
	
	public function drift()
	{
		echo 'La voiture '.$this->couleur.' de marque '.$this->marque.' fait un putain de drift<br>';
	}
	
}

$voiture = new Voiture('Ford', 'Rouge');
$voiture->avancer();
$voiture->drift();