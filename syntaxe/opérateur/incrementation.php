<?php


$a = 10;

//ligne1 :      echo ++$a;  echo '<br>';     // Pré-incrémentation
//ligne2 :      echo $a++;  echo '<br>';     // Post-incrémentation

//ligne3 :      echo --$a;  echo '<br>';     // Pré-décrémentation
//ligne4 :      echo $a--;  echo '<br>';     // Post-décrémentation

/* -----------------------------------------------------
Fait intéressent :
Si on fait echo de toutes les lignes en même temps le résultat de chacune sera la même : 11
En revanche si on affiche seulement le echo de la ligne 1, ca affichera : 11
pour la ligne 2, ca affichera : 10
pour la ligne 3, ca affichera : 9
et pour la ligne 4, ca affichera : 10

 - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

Mais cela est du que quand nous pré-incrémentons (ou pré-décrémentons) ca va 
incrémenter (ou décrémenter) la variable puis la retourner 
Alors que 
quand nous post-incrémentons (ou post-décrémentons) ca va
d'abord retourner la variable puis l'incrémenter (ou la décrémenter)


Je vous laisse décommenter les lignes echos pour vérifier.
----------------------------------------------------- */

?>