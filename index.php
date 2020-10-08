<?php
session_start();
require 'Calculatrice.php';
require 'CalculatriceSc.php';
require 'core.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
  <title>Calculatrice</title>
</head>
<body>

  <h1>Calculatrice Php Poo</h1>
  
  <div class="formwrapper">
      <form action="#" method="POST">
      <input type="radio" name="typecalc" value="classique" <?php echo $_SESSION['calctype']==='classique' ? 'checked' : null ?>> Classique
      <input type="radio" name="typecalc" value="scientifique" <?php echo $_SESSION['calctype']==='scientifique' ? 'checked' : null ?>> Scientifique<br>
      <input type="number" name="nombre1" class="input"  value="<?php echo $nombre1; ?>">
      <input type="number" name="nombre2" class="input"  value="<?php echo $nombre2; ?>"><br>
      
      <select id="op" name="operateur">
          <option value="add">+</option>
          <option value="sub">-</option>
          <option value="mul">x</option>
          <optgroup id="sci">
            <option value="pow" id="pow">pw</option>
            <option value="mod" id="mod">%</option>
          </optgroup>
         
          
         
      </select><br>
       
      <button disabled="disabled" type="submit" name="submitButton" id="btncalc">Calculer</button>

      </form>

      <div class="result"><?= $result; ?></div>
  </div>
   
  <script src="calc.js"></script>
</body>
</html>

