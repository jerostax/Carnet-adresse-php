<?php

# Benchmark sur les 3 méthodes de concaténation : avec guillemets, avec apostrophes et avec sprintf.

# L'objectif est de savoir quelle est la méthode qui va le plus vite. Il s'agit de tester 3 méthodes d'assignation pour i.

# L'organisation du fichier se fait en 3 blocs : 
# 1/ définir dans une variable $start un microtime() = temps serveur
# 2/ boucler et assigner une valeur dans i. Boucler énormément de fois est conseillé pour un benchmark.
# 3/ définir le temps d'exécution dans une variable $end

# ************************
$start = microtime(1);

for($i=0; $i<700000; $i++){
    $assign = "i : $i";
}

$end = microtime(1) - $start;

# ************************

$start2 = microtime(1);

for ($i=0; $i<700000; $i++){
    $assign2 = 'i : ' . $i;
}

$end2 = microtime(1) - $start2;

# ************************

$start3 = microtime(1);

for ($i=0; $i<700000; $i++){
    $assign3 = sprintf('i : %s', $i);
}

$end3 = microtime(1) - $start3;

# ************************

echo "<br>temps guillemets : $end";
echo "<br>temps apostrophes : $end2";
echo "<br>temps sprintf : $end3";

# Dans ce cas, les guillemets sont les plus rapides (mais ce n'est pas toujours le cas!) Sprintf est plus long que les autres, mais plus lisible. Ce sont les 2 méthodes préférées.