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
  
  function nom($nom){
    return ucfirst($nom);
  };
  echo nom('emilie');
  echo '<hr>';
  echo date('Y');
  echo '<hr>';
  echo date('d/m/Y - H:i:s');
  echo "<hr>";

  function calcul($chiffre1,$chiffre2){
      if(is_int($chiffre1) == true  && is_int($chiffre2) == true ){
    return $chiffre1 + $chiffre2; }
      else {
        return "Erreur! Argument non numérique";
      }
  };
  echo calcul(8,6);
  echo "<hr>";

  function dromadaire($input){
    $newInput = ucwords($input);
    return preg_replace('/[^A-Z]/', '', $newInput);
  };

  echo dromadaire("jeune homme pauvre");
  echo "<hr>";

  function ae($input){
    return str_replace("ae","æ",$input);
  };
  echo ae("caecotrophie , chaenichthys , microsphaera , sphaerotheca");
  echo "<hr>";

  function ea($input){
    return str_replace("æ","ae",$input);
  };
  echo ea("cæcotrophie, microsphæra , chænichthys , sphærotheca");
  echo "<hr>";

  function erreur($message,$alert){
    if (empty($alert)){
      return '<div class = info>'.$message.'</div>';
    };
    return "<div class =" .$alert.'>'.$message.'</div>';
  };
  echo erreur("Email invalide","warning");
  echo "<hr>";

  function generator($size){
    $lettre = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s","t", "u", "v", "w", "x", "y", "z"];
      for ($i = 0; $i < $size ; $i++) {
        $word .= $lettre[array_rand($lettre)];
      };
      return $word;
  };
  // a finir!
  echo generator(5);
  echo generator(10);
  echo "<hr>";

  function minus($input){
    return mb_strtolower($input);
  };

  echo minus("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
  echo "<hr>";

  function volume_dun_cone($rayon,$hauteur){
    $volume = $rayon*$rayon*3.14*$hauteur*(1/3);
    return $volume;
  }
  echo volume_dun_cone(12,5);
  echo "<hr>";

  function reverse_string($input){
    return strrev($input);
  }
  echo reverse_string('Bonjour tout le monde');
  echo "<hr>";

  function wallo(){
    $musique = "Bavas a ca ma sarpata a parda,</br> Ma la macha ma la macha </br> Bavas a ca ma sarpata a parda </br> Ma la macha a ravana.<hr>";
    $substitutions =  ["e", "i","o", "u", "ou", "é", "è", "oi", "ui", "oui", "an", "in", "on", "un", "oin"];
    foreach ($substitutions as $key => $value) {
      echo str_replace('a',$value,$musique);
      echo '</br>';
    };
  };

  wallo();
   ?>
</body>
</html>
