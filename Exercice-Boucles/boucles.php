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

  $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
  foreach ($pronoms_personnels as $index => $value) {
    echo $value;
    if ($value == 'Je'){
      echo " code </br>";
    } elseif ($value == 'Tu') {
      echo " codes </br>";
    } elseif ($index == 2) {
      echo " code </br>";
    } elseif ($index == 3) {
      echo " condons </br>";
    } elseif ($value == 'Vous') {
      echo " codez </br>";
    } elseif ($value == 'Elles/Ils') {
      echo " codent </br>";
    }
  };

  $ligne = 1;
  while ($ligne <= 120){
    echo $ligne ;
    $ligne++;
  }

  for ($ligne=1; $ligne <= 120 ; $ligne++) {
    echo $ligne;
  };

  echo "</br>";

  $classe = ['Steve','Nicolas','Axel','Marvin','Thomas'];
  for ($name = 0; $name < count($classe) ; $name++) {
    echo 'Son nom est '. $classe[$name] . '</br>';
  };

  $land = ['Belgique','France','Espagne','Italie','Allemagne','Pays-Bas','Ukraine','Japon','Angleterre','Grèce'];
  $keyArr = [];
  $a = [];
    foreach ($land as $key => $pays) {
      $keyArr[]= strtoupper(substr($pays,0,2));
    };

  for($i=0;$i<count($land);$i++){
      $a[$keyArr[$i]] = $land[$i];
  };

  echo "<select>";
    foreach ($a as $key => $value) {
      echo "<option value = ". $value .' > '. $key.'</option>';
    };
  echo "</select>";

   ?>
</body>
</html>
