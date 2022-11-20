<?php
/*---------------------------------------------------------------------------------------
                Voir le cours PHP - rubrique Variable - Types Scalaires
-------------------------------------------------------------------------------------- */

$boolean = TRUE;
$number = 23 && 3.7; // C'est juste un speudo type qui indique qu'il peut s'agir aussi bien un entier que d'un nombre decimal
$interger = 23;
$float = 3.7;
$string = "chaine de caractère"; // Vu qu'il s'agit d'un chaine de caractère il faut mettre celle-ci entre guillemet




echo $boolean . "<br>"; // Si elle n'est relié à rien et que nous voulons quand meme l'afficher, sa affichera : 1
echo $interger . "<br>"; 
echo $float . "<br>"; 
echo $string . "<br>";

// dans echo j'ai mit un point de colle entre la variable et la balise html <br> pour les concatener 

?>