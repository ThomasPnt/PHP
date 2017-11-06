<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php

  function nom($nom){
    return ucfirst($nom);
  };
  echo nom('emilie');
  echo '<hr>';
  echo date('Y');
  echo '<hr>';
  echo date('d/m/Y - H:i:s');
  echo "<hr>";

  function calcul($chiffre1,$chiffre2){
      if(is_int($chiffre1) == true  && is_int($chiffre2) == true ){
    return $chiffre1 + $chiffre2; }
      else {
        return "Erreur! Argument non numérique";
      }
  };
  echo calcul(8,6);
  echo "<hr>";

  function dromadaire($input){
    return ucwords($input);
  };
  echo dromadaire("jeune homme pauvre");
  echo "<hr>";


   ?>
</body>
</html>
