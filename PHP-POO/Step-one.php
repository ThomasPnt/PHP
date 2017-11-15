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

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=city;charset=utf8', 'root', 'user');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$resultat = $bdd->query("SELECT * FROM cities");


// foreach ($resultat as $donnees => $ville) {
//   echo $ville['Ville'];
// }

// define('bleu' , $donnees = $resultat->fetch());

 // while($donnees = $resultat->fetch()){
 //   echo $donnees['Ville'];
 // };

 // print_r($donnees);

// echo '<select>';
//
// function selectVille($resultat){
// while ($donnees =$resultat->fetch()) {
//   echo "<option value=''>";
//   echo $donnees['Ville'];
//   echo "</option>";
// }
// echo '</select>';
// };
//
// selectVille($resultat);
//


Class Form {
  public $action;
  public $input;
  public $select;
  public $button;
  public $textArea;
  public $value;

  public function create($action)
  {
    echo "<form action='$action' method='post'>";
  }
  public function input($input)
  {
    echo "<input type='$input'>";
  }
  public function select($resultat)
  {
    echo "<select>";
    while($donnees = $resultat->fetch() ) {
      echo "<option value=''>";
      echo $donnees['Ville'];
      echo "</option>";
      echo "test";
    }
    echo "</select>";
  }
  public function button($button,$value)
  {
    echo "<button type='$button'>$value</button>";
  }
  public function textArea()
  {
    echo "<textarea></textarea>";
  }
}

$form = new Form;
$form->create('Step-one.php');
$form->input('text');
$form->select($resultat);
$form->button('Submit','Valider');
$form->button('Radio','Euh');
$form->textArea();
$form->input('checkbox');
?>




</body>
</html>
