<?php

/* Écrivez la routine afficherÉtoiles( var bn_étoiles) qui reçoit en paramètre un entier positif et affiche à l'écran un nombre d'étoiles identiques à cette valeur.
Exemple : afficherÉtoiles(3) => ***
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

afficherÉtoiles(4) ;