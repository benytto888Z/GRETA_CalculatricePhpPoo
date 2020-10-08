<?php

class CalculatriceC
{
  public $nombre1;
  public $nombre2;
  public $operateur;
  public $type;

  public function __construct($nombre1,$nombre2,$operateur,$type)
  {
      $this->nombre1 = $nombre1;
      $this->nombre2 = $nombre2;
      $this->operateur = $operateur;
      $this->type = $type;
  }

  public function calculer()
  {

    switch ($this->operateur) {
      case 'add':
      $resultat = $this->nombre1 + $this->nombre2;
        break;

        case 'sub':
      $resultat = $this->nombre1 - $this->nombre2;
        break;
        
        case 'mul':
        $resultat = $this->nombre1 * $this->nombre2;
        break;
      
      default:
       $resultat = "Erreur";
        break;
    }

    return $resultat;

  }
}


class CalculatriceSc extends CalculatriceC
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






























