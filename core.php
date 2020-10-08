<?php

$nombre1=0;
$nombre2=0;
$result = 0;

if(!isset($_SESSION['calctype'])){
  $_SESSION['calctype'] = 'classique';
}


if(isset($_POST['submitButton']) && isset($_POST['typecalc'])){

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$operateur = $_POST['operateur'];
$type = $_POST['typecalc'];

$_SESSION['calctype'] = $type;



if(is_numeric($nombre1) && is_numeric($nombre2)){
  
  if($_SESSION['calctype']==='classique'){
     $macalculatrice = new Calculatrice($nombre1,$nombre2,$operateur,$type);
     $result = $macalculatrice->calculer();
  }else if($_SESSION['calctype']==='scientifique'){
    $macalculatrice = new CalculatriceSc($nombre1,$nombre2,$operateur,$type);
    $result = $macalculatrice->calculeSc();
 }
 
}else{
  return;
}

}






















