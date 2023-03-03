<?php


function survivreFemme($age)
{
  if (($age < 18) || ($age >= 18)){
    return true ;
  } 
  
}

function survivreHomme($age)
{
  if  ($age < 18) {
    return true ;
  }
  else if ($age >= 18) {
    return false ;
  }
}

function survivre($sexe, $age)
{
  // condition femme
  
  if ($sexe === "femme"){ 
    return survivreFemme($age) ;
  } 
  //condition homme
  if ($sexe === "homme"){
    return survivreHomme($age) ;
  }
  
  return "error" ;
}

var_dump(survivre("femme", 18));
echo PHP_EOL ;

var_dump(survivre("homme", 18));
echo PHP_EOL ;

var_dump(survivre("maison", 18));
echo PHP_EOL ;