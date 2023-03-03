<?php

function compare2Numbers($nb1, $nb2)
{
  $g ;
  if ($nb1 === $nb2){
    return false ;
  }
  if ($nb1 <= $nb2){
    $g = $nb2 ;
  }
  else {
    $g = $nb1 ;
  }
  return $g ;
}

echo "Le plus grand nombre est: ", compare2Numbers(2, 5) ;

function compare3Numbers($nb1, $nb2, $nb3)
{
  $g ;
  $resultat ;
  if (($nb1 === $nb2) || ($nb1 === $nb3) || ($nb3 === $nb2)){
    return false ;
  }
  if ($nb1 <= $nb2){
    $g = $nb2 ;
  }
  else {
    $g = $nb1 ;
  }
  if ($g <= $nb3){
    $resultat = $nb3 ;
  }
  else {
    $resultat = $g ;
  }
  return $resultat ;
}


function compare4Numbers($nb1, $nb2, $nb3, $nb4)
{
  $g1 ;
  $g2 ;
  $resultat ;
  if (($nb1 === $nb2) || ($nb1 === $nb3) || ($nb3 === $nb2) || ($nb1 === $nb4) || ($nb2 === $nb4) || ($nb3 === $nb4)){
    return false ;
  }
  if ($nb1 <= $nb2){
    $g1 = $nb2 ;
  }
  else {
    $g1 = $nb1 ;
  }
  if ($g1 <= $nb3){
    $g2 = $nb3 ;
  }
  else {
    $g2 = $g1 ;
  }
  if ($g2 <= $nb4){
    $resultat = $nb4 ;
  }
  else {
    $resultat = $g2 ;
  }
  return $resultat ;
}

echo "Le plus grand nombre est: ", compare2Numbers(2, 5) ;
echo PHP_EOL ;

echo "Le plus grand nombre est: ", compare3Numbers(2, 5, 7.1) ;
echo PHP_EOL ;

echo "Le plus grand nombre est: ", compare4Numbers(2, 5, 0 ,40) ;
echo PHP_EOL ;