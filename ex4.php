<?php

/* Écrivez un programme qui permet de jouer au nombre mystère avec l'utilisateur.
Le programme choisit un nombre mystère aléatoirement entre 1 et 100, puis il demande à l'utilisateur de deviner ce nombre.
Si le nombre choisi par l'utilisateur est trop petit, on affiche "trop petit"; s'il est trop grand, on affiche "trop grand".
Si l'utilisateur a trouvé le bon nombre, on lui affiche "gagné" et le nombre de coups qu'il a joués.
L'ordinateur dispose d'une fonction Lire() qui récupère une valeur saisie au clavier par l'utilisateur.
Par exemple:       saisie <- Lire()          va enregistrer dans la variable "saisie" ce que l'utilisateur vient de taper. */



function devinetteNombre($saisie)
{
  $saisie ;
  $n = 1 ;
  $nom = rand(0, 3) ;
  while ($saisie <> $nom){
    echo "entrer un nombre entre 0 et 3" ;
    echo PHP_EOL ;
    $saisie = rand(0, 3) ;
    if ($saisie < $nom){
      echo "trop petit" ;
      echo PHP_EOL ;      
    }
    else {
      echo "trop grand" ;
      echo PHP_EOL ;
    }  
    $n = $n + 1 ;
  }
  
  echo "gagné" ;
  echo PHP_EOL ;
  echo "nobre d'essais" , $n ;
}

devinetteNombre(0) ;