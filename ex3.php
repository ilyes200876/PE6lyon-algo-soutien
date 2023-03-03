<?php

/* Écrivez la routine afficherÉtoiles( var bn_étoiles) qui reçoit en paramètre un entier positif et affiche à l'écran un nombre d'étoiles identiques à cette valeur.
Exemple : afficherÉtoiles(3) => ***
 */
/* Écrivez la routine afficherÉtoilesMultiligne(var nb_étoiles) qui reçoit en paramètre un entier positif, et affiche un triangle d'étoiles dont le nombre de lignes est identique à cette valeur.
Exemple : afficherÉtoilesMultilignes(3) =>
*
**
***  

*/

 function  afficherÉtoiles($bn_étoiles)
{ 
  $result = " " ;
  $compteur = 1 ;
  while ($compteur <= $bn_étoiles) {
    $result = $result . "*" ;
    $compteur = $compteur + 1 ;
  }
  echo $result ;
}
function afficherÉtoilesMultiligne($nb_étoiles)
{
  $result = " " ;
  $compteur = 1 ;
  while ($compteur <= $nb_étoiles) {
    $result = $result . "*" ;
    echo $result ;
    echo PHP_EOL ;
    $compteur = $compteur + 1 ;
  }
  
}



afficherÉtoiles(4) ;
echo PHP_EOL ;


afficherÉtoilesMultiligne(4) ;