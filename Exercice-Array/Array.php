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
  $famille = ['Jean-Luc','Christine','Valentine','Tristan'];
  print_r($famille);

  $plat = ['Pates','Poulet','Steak','Frites'];
  print_r($plat);

  $film = ['Thor','Thor 2 ', 'Thor 3'];
  echo $film[2];

  $moi = [
    'prénom' => 'Thomas',
    'nom' => 'Point',
    'foot' => false,
    'age'=> 21,
    'hobbies' => ['sport','code'],
    'papa' => $papa //a finir! 
  ];

  $papa = [
    'prénom' => 'Jean-Luc',
    'nom' => 'Point',
    'foot' => true,
    'age'=> 60,
    'hobbies' => ['lecture','marche']
  ];

  echo '<pre>';
  print_r($moi);
  echo '</pre>';


   ?>
</body>
</html>
