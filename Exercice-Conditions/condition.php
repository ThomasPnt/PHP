<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <form method='post' action="condition.php">
    Age : <input type="number" name='Age'> </br>
    Homme : <input type='radio' name='Homme'>
    Femme : <input type="radio" name='Femme'> </br>
    Parles-tu Anglais? </br>
    Yes : <input type='radio' name='Yes'>
    No : <input type='radio' name='No'></br>
    <input type="submit" value='OK'>
  </form>

  <?php
  $langueYes = $_POST['Yes'];
  $langueNo = $_POST['No'];
  $homme = $_POST['Homme'];
  $femme = $_POST ['Femme'];
  $age = $_POST['Age'];

    if ($age < 12){
      echo 'Salut Petit';
    } elseif ($age >= 12 AND  $age < 18 AND $homme == true) {
      echo "Salut l'adolescent";
    } elseif ($age > 18 AND $age < 115) {
      echo "Salut l'adulte";
    } elseif ($age >= 12 AND $age < 18 AND $femme == true) {
      echo "Salut l'adolescente";
    } else {
      echo "Wow toujours vivant?";
    }

    if ($age < 12 AND $langueYes == true AND $homme == true) {
      echo "Hello Boy";
    } elseif ($age < 12 AND $langueYes == true AND $femme == true) {
      echo "Hello Girl";
    } elseif ($langueNo == true) {
      echo " Il serait temps d'apprendre l'anglais!";
    } else {
      echo 'Hello';
    }


   ?>
 </br>
  <?php

    $chambre_en_ordre = 'en ordre';
    if ($chambre_en_ordre == 'immaculé') {
      echo 'Range ta chambre espèce de Bonobo!';
    } elseif ($chambre_en_ordre == 'en ordre'){
      echo "C'est bien mais tu es quand même un sale Bonobo!";
    }  elseif ($chambre_en_ordre == 'sale') {
      echo "Gros porc!";
    }  elseif ($chambre_en_ordre == 'maniaque') {
      echo "Tu es bizarre!";
    } else {
      echo 'Mouais';
    }

    $time = 2.00;

    if ($time >= 5.00 AND $time <= 9.00){
      echo 'Bonjour';
    } elseif ($time >= 9.01 AND $time <= 12.00) {
      echo 'Bonne journée';
    } elseif ($time >= 12.01 AND $time <= 16.00) {
      echo 'Bon après-midi';
    } elseif ($time >= 16.01 AND $time <= 21.00) {
      echo 'Bonne soirée';
    } else {
      echo 'Bonne nuit';
    }


  ?>
</body>
</html>
