<?php 
/*---------------------------------------------------------------------------------------
                Voir le cours PHP - rubrique Syntaxe - Opérateur
-------------------------------------------------------------------------------------- */

$a = 10;
$b = 10;


// J'utilise var_dump() pour afficher les informations des variables (le type et la valeur)

var_dump($a == $b);    echo "<br>";   // Egal
var_dump($a === $b);   echo "<br>";   // Identique

var_dump($a != $b);    echo "<br>";   // Différent
var_dump($a <> $b);    echo "<br>";   // Différent
var_dump($a !== $b);   echo "<br>";   // Différent

var_dump($a > $b);     echo "<br>";   // Plus grand que
var_dump($a < $b);     echo "<br>";   // Plus petit que

var_dump($a >= $b);    echo "<br>";   // Supérieur ou egal
var_dump($a <= $b);    echo "<br>";   // Inférieur ou egal

var_dump($a <=> $b);   echo "<br>";   // Combiné

?>