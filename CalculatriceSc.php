<?php

class CalculatriceSc extends Calculatrice
{
 
  public function calculeSc()
  {
   

    $resultat = parent::calculer();

    if($this->operateur =="pow"){
     $resultat = pow($this->nombre1,$this->nombre2);
   }else if($this->operateur =="mod"){
    $resultat = $this->nombre1 % $this->nombre2;
  }
   

    return $resultat;

  }
}






























