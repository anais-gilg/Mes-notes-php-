<?php
/*---------------------------------------------------------------------------------------
                Voir le cours PHP - rubrique Syntaxe - Guillemet
-------------------------------------------------------------------------------------- */



$a = 5; // Ne pas oublier de mettre le ";" pour éviter les fautes de syntaxe

echo 'Je voudrai $a pommes <br>'; // <br> dans les guillemets pour préciser qu'on veut un retroure à la ligne.
echo 'Je voudrai ' . $a . ' pommes <br>'; 
// Pour afficher la valeur de la variable $a il la mettre en dehors des guillemets simple et rajouter des points (de colle) 

echo 'Il faut d\'avantage travailler <br>'; // Mettre un antislash devant le guillemet simple pour indiquer qu'il est littéral

echo '/Attention\\'; // Mettre un 2eme antislash pour pour afficher le 1er
?>