<?php

/* Reprenez le nombre mystère, mais cette fois, si l'utilisateur propose un nombre qu'il a déjà proposé,
 il faut lui afficher "Déjà tenté, " suivi de la mention "trop petit" ou "trop grand"
Vous aurez donc besoin de mémoriser les différentes tentatives du joueur dans un tableau. */


function nombreExisteDeja()
{
  $tab = [] ;
  $i = 0 ;
  $saisie = rand(0, 5) ;
  $tab[] = $saisie ;
  while ($i < count($tab)){
    if ($saisie == $tab[$i]){
      echo "Déjà tenté" ;
      echo PHP_EOL ;
      return $saisie ;
    } 
    $i = $i + 1 ;
  }
  return $saisie ;
}


function devinetteNombreTab()
{
  
  $n = 1 ;
  $nom = rand(0, 5) ;
  $saisie = rand(0, 5) ;
  while ($saisie <> $nom){
    echo "entrer un nombre entre 0 et 5" ;
    echo PHP_EOL ;
    
    nombreExisteDeja() ;
    if ($saisie < $nom){
      echo "trop petit" ;
      echo PHP_EOL ;      
    }
    else if ($saisie > $nom){
      echo "trop grand" ;
      echo PHP_EOL ;
    }  
    $n = $n + 1 ;
  }
  
  echo "gagné" ;
  echo PHP_EOL ;
  echo "nobre d'essais " , $n ;
}

devinetteNombreTab() ;