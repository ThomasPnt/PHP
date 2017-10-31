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
  $note = 3;
  switch ($note) {
    case '0':
      echo 'la valeur est égal a 0';
      break;
    case '1':
      echo 'la valeur est égal a 1';
      break;
    case '2':
      echo 'la valeur est égal a 2';
      break;
    case '3':
      echo 'la valeur est égal a 3';
      break;
    case '4':
      echo 'la valeur est égal a 4';
      break;
    case '5':
      echo 'la valeur est égal a 5';
      break;
    case '6':
      echo 'la valeur est égal a 6';
      break;
    case '7':
      echo 'la valeur est égal a 7';
      break;
    case '8':
      echo 'la valeur est égal a 8';
      break;
    case '9':
      echo 'la valeur est égal a 9';
      break;
    case '10':
      echo 'la valeur est égal a 10';
      break;
    default:
      echo 'la valeur est égal a plus de 10';
      break;
  }
  ?>
  <form method='post' action="conditions-switch.php">
    Age : <input type="number" name='Age'> </br>
    Homme : <input type='radio' name='Homme'>
    Femme : <input type="radio" name='Femme'> </br>
    <input type="submit" value='OK'>
  </form>
  <?php

  $age = $_POST['Age'];
  $sexe = $_POST['Femme'];

  if($age >= 21 AND $age <= 40 AND $sexe == true){
    echo "Bonjour, bienvenue parmi nous!";
  } //else {
  //   echo "Désolé, vous ne remplissez pas les critères de sélection.";
  // }
  ?>
</body>
</html>
