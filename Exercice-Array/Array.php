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

  array_push($moi['hobbies'],"Taxidermie");
  $moi['nom'] = "Dieudonné";

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

  $resultPapa = count($papa['hobbies']);
  print_r($resultPapa);

  echo "</br>";

  $resultMoi = count($moi['hobbies']);
  print_r($resultMoi);

  echo "</br>";

  $add = $resultPapa + $resultMoi;
  echo $add;

  $toi = [
    'prénom'=> 'Manon',
    'nom' => 'Bréda',
    'foot' => false ,
    'age' => 20 ,
    'hobbies' => ['musique','série']
  ];

  $enfant1 = array_intersect($moi,$toi);
  echo'<pre>';
  print_r($enfant1);
  echo'</pre>';

  echo"</br>";

  $enfant2 = array_merge($moi,$toi);
  echo'<pre>';
  print_r($enfant2);
  echo'</pre>';

  $webDev = [
    'frontend' => ['xhtml','CSS', 'Javascript','Flash'],
    'backend' => ['Ruby on Rails' , 'Javascript']
  ];

  unset($webDev['frontend'][3]);
  $webDev['frontend'][0] = 'html';

  echo'<pre>';
  print_r($webDev);
  echo'</pre>';
   ?>
</body>
</html>
