<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
  <body>
    <form name="Météo" method="post" action="weatherapp.php">
      <center>
      Ville: <input type="text" name="ville"/></br>
      Maxima: <input type="int" name="max"/></br>
      Minima: <input type="int" name="min"/></br>
      <input type="submit" name="valider" value="Valider">
    </center>
    </form>

    <?php
    try
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', 'user');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }


    $ville = $_POST['ville'];
    if(is_string($ville) == false && is_null($ville) == false){
        echo'(/"Erreur dans Ville il faut un nom de ville!"/)';
    }
    $max = $_POST['max'];
    if(is_numeric($max) == false && is_null($max) == false){
        echo'(/"Erreur dans Maxima il faut un chiffre!"/)';
    }
    $min = $_POST['min'];
    if(is_numeric($min) == false && is_null($min) == false){
        echo'(/"Erreur dans Minima il faut un chiffre!"/)';
      };

    $sql = $bdd->prepare('INSERT INTO meteo VALUES (:ville,:max, :min)');
    $sql->bindParam(':ville', $ville);
    $sql->bindParam(':max', $max);
    $sql->bindParam(':min', $min);
    $sql->execute();

    // print_r($bdd->errorInfo());


    $resultat = $bdd->query('SELECT * FROM meteo');

    echo '<table>';
    $donnees = $resultat->fetch();
    while ($donnees = $resultat->fetch())
      {
        echo "<tr><td>";
        echo $donnees['Ville'];
        echo '</td><td>';
        echo $donnees['Bas'];
        echo '</td><td>';
        echo $donnees['Haut'];
        echo '</td></tr>';
      };
    echo '</table>';
    $resultat->closeCursor();



    ?>
