<?php 
include 'Player.class.php';
include 'Battle.class.php';

$p1 = new Player("Mickey");
$p2 = new Player("Minnie");

$battle = new Battle($p1, $p2);
# $battle->draw(); // on distribue les cartes

echo $battle->game();

# echo '<pre>';
# print_r($p1);
# echo '</pre>';
# echo $p1->getCard();
# echo '<br>';
# echo $p2->getCard();
