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
  // $homme = $_POST['Homme'];
  $femme = $_POST ['Femme'];
  $age = $_POST['Age'];

    if ($age < 12 AND $femme == true){
      echo 'Salut Petite';
    } elseif ($age < 12 AND $femme == false) {
      echo 'Salut Petit';
    } elseif ($age >= 12 AND  $age < 18 AND $femme == false) {
      echo "Salut l'adolescent";
    } elseif ($age >= 12 AND $age < 18 AND $femme == true) {
      echo "Salut l'adolescente";
    } elseif ($age > 18 AND $age < 115 AND $femme == false) {
      echo "Salut Monsieur";
    } elseif ($age > 18 AND $age < 115 AND $femme == true) {
      echo "Bonjour Madame";
    } else {
      echo "Wow toujours vivant?";
    }

    if ($age < 12 AND $langueYes == true AND $homme == true) {
      echo " Hello Boy";
    } elseif ($age < 12 AND $langueYes == true AND $femme == true) {
      echo " Hello Girl";
    } elseif ($age >= 12 AND  $age < 18 AND $langueYes == true AND $femme == true) {
      echo " Hello Teenage Girl";
    } elseif ($age >= 12 AND  $age < 18 AND $langueYes == true AND $femme == false) {
      echo " Hello Teenage Boy";
    } elseif ($age > 18 AND $age < 115 AND $langueYes == true AND $femme == true) {
      echo " Hello Lady";
    } elseif ($age > 18 AND $age < 115 AND $langueYes == true AND $femme == false) {
      echo " Hello Mister";
    } elseif ($age >= 115 AND $langueYes == true AND $femme == true) {
      echo " Wow still alive, old lady?";
    } elseif ($age >= 115 AND $langueYes == true AND $femme == false) {
      echo " Wow still alive, old man?";
    } else {
      echo " Il serait temps d'apprendre l'anglais!";
    }
  ?>
 </br>
  <?php
    $note = 3;
    if($note <= 3){
      echo "Ce travail est nul.";
    } elseif ($note > 3 AND $ $note <= 9) {
      echo "Ce travail n'est pas terrible.";
    } elseif ($note = 10 ) {
      echo "Tout juste !";
    } elseif ($note > 10 AND $ $note <= 14) {
      echo "C'est pas mal!";
    } elseif ($note > 14 AND $ $note <= 18) {
      echo "Bravo";
    } else {
      echo "Police! Arrêtez ce tricheur!";
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
