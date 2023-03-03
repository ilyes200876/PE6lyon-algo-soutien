<?php

function survivre($sexe, $age)
{
  if (($sexe === "femme") && (($age < 18) || ($age >= 18))){
    return true ;
  } 
  if (($sexe === "homme") && ($age < 18)) {
    return true ;
  }
  else if (($sexe === "homme") && ($age >= 18)) {
    return false ;
  }
  return "error" ;
}

var_dump(survivre("femme", 18));
echo PHP_EOL ;

var_dump(survivre("homme", 18));
echo PHP_EOL ;