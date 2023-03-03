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

/* Écrivez la routine afficherÉtoilesMultilignesRTL( var nb_étoiles).
Elle est identique à la précédente, à l'exception que la pointe haute du triangle doit être alignée à droite
Exemple : afficherÉtoilesMultilignesRTL(3) => 
  *
 **
*** 
*/

function afficherEspaceEtoile($nb_étoiles)
{
  $i = 0 ;
  $k = "" ;
  while ($i <$nb_étoiles - 1) {
    $k = $k . " " ;
    $i = $i + 1 ;
  }
  return $k ;
}

function afficherÉtoilesMultilignesRTL($nb_étoiles)
{ $k = "" ;
  $result = " " ;
  $compteur = 1 ;
  $p = " " ;
  while ($compteur <= $nb_étoiles) {
    $k = afficherEspaceEtoile($nb_étoiles) ;
    $p = $p . "*" ;
    $result = $k . $result . "*"  ;
    echo $result ;
    echo PHP_EOL ;
    $result = $p ; 
    $nb_étoiles = $nb_étoiles - 1 ;
  }  
}

afficherÉtoiles(4) ;
echo PHP_EOL ;


afficherÉtoilesMultiligne(4) ;
echo PHP_EOL ;


afficherÉtoilesMultilignesRTL(4) ;
echo PHP_EOL ;

