<?php

class Calculatrice
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































