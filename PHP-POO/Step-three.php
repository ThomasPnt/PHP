<?php

Class Validator{

  public $value;


  public function Isstring($value)
  {
    $str = preg_replace('/\D/', '', $value);
    echo $str == '' ? 'Good': 'Pas de chiffre!';
  }
  public function Isinteger($value)
  {
    if(is_int($value) === true)
    {
      echo "Good";
    } else {
      echo "Pas de nombre à virgule";
    }
  }
}

$try = new Validator;
$try->Isstring('a'); echo '</br>';
$try->Isstring('2'); echo '</br>';
$try->Isinteger(12.5); echo '</br>';
$try->Isinteger(12); echo '</br>';
$try->Isstring('adad212ad'); echo '</br>';


 ?>
