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

   ?>
</body>
</html>
