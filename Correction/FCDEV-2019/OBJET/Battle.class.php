<?php 

/**
* Description
*/
class Battle
{
	
    private $signs = [
        "Pique" => [1, 13],
        "Carreau" => [14, 26],
        "Coeur" => [27, 39],
        "Trèfle" => [40, 52]
    ];
	
    private $codes = [
        14 => "As",
        11 => "Valet",
        12 => "Dame",
        13 => "Roi"
    ];
	
	private $cards;
	
	private $player1, $player2;
	
	# ON met en mémoire les 2 objets Player
	function __construct(Player $p1, Player $p2)
	{
		$this->player1 = $p1;
		$this->player2 = $p2;
		
		$this->cards = range(1,52);
	}
	
	public function draw()
	{
		shuffle($this->cards); // on mélange les cartes
		$pick = array_rand($this->cards, 2); // on prend 2 cartes au pif dans l paquet mélangé
		$this->player1->setCard($this->cards[$pick[0]]);
		$this->player2->setCard($this->cards[$pick[1]]);
		
	}
	
	# converti le nombre entre 1 et 52 en hauteur de carte entre 1 et 13
	public function hauteurCard(int $num)
	{
		$num = $num%13;
		if($num == 0) $num = 13; // on rend l'As plus fort que le roi
		return $num + 1;
	}
	
	public function textCard(int $num)
	{
		# On cherche la couleur de la carte
		foreach ($this->signs as $key => $val)
		{
			if ($num >= $val[0] && $num <= $val[1])
			{
				$family = $key; // couleur de la carte
			}
		}
		
		$num = $this->hauteurCard($num); // on converti entre 1 et 13
		
		# On récupère la figure de la carte (as, roi, etc…)
		if(array_key_exists($num, $this->codes))
		{
			$figure = $this->codes[$num];
		}
		else $figure = $num;
		
		return sprintf('%s de %s', $figure, $family);
	}
	
	public function genereTextGenre($carte)
	{
		# if ($carte == 12)
		# {
		# 	return 'une';
		# }
		# else return 'un';
		
		return ($carte == 12) ? 'une' : 'un'; // ternaire
	}
	
	# Lancement du jeu
	public function game()
	{
		$this->draw();
		
		$cp1 = $this->player1->getCard(); // 48
		$cp2 = $this->player2->getCard(); // 22
		
		$numCardP1 = $this->hauteurCard($cp1); // 11
		$numCardP2 = $this->hauteurCard($cp2); // 13
		
		if ($numCardP1 < $numCardP2)
			
			return $this->player2->getName().
				' a gagné avec '.
				$this->genereTextGenre($numCardP2).
				' '.$this->textCard($cp2).
				' ! '.$this->player1->getName().
				' avait '.
				$this->genereTextGenre($numCardP1).
				' '.$this->textCard($cp1).
				'.';
		
		if ($numCardP1 > $numCardP2)
			
			return $this->player1->getName().
				' a gagné avec '.
				$this->genereTextGenre($numCardP1).
				' '.$this->textCard($cp1).
				' ! '.$this->player2->getName().
				' avait '.
				$this->genereTextGenre($numCardP2).
				' '.$this->textCard($cp2).
				'.';
		
		else
			return 'BATAILLE !!!!<br>'.
				$this->textCard($cp1).' contre '.
				$this->textCard($cp2);
	}
	
}