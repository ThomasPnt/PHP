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

$resultat = $bdd->query("SELECT * FROM Ville");

$donnees = $resultat->fetch();
echo '<select>';
while ($donnees =$resultat->fetch()) {
  echo "<option value=''>";
  echo $donnees['Ville'];
  echo "</option>";
}
echo '</select>';




Class Form {
  public $action;
  public $input;
  public $select;
  public $button;
  public $textArea;
  public $values;

  public function create($action)
  {
    echo "<form action='$action' method='post'>";
  }
  public function input($input)
  {
    echo "<input type='$input'>";
  }
  public function select()
  {
    echo "<select></select>";
  }
  public function button($button)
  {
    echo "<button type='$button'></button>";
  }
  public function textArea()
  {
    echo "<textarea></textarea>";
  }
}

$form = new Form;
$form->create('index.php');
$form->input('text');
$form->select();
$form->button('Submit');
$form->button('Radio');
$form->textArea();
$form->input('checkbox');
?>




</body>
</html>
