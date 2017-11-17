<?php

Class Voiture{

  private $immatriculation;
  private $circulation;
  public $km;
  private $model;
  private $marque;
  public $couleur;
  public $poid;
  private $pays;

  public function __construct($model,$poid,$pays,$km,$circulation){
    $this->model($model);
    $this->poid($poid);
    $this->from($pays);
    $this->km($km);
    $this->age($circulation);
  }
  private function model($model){
    if($model === 'Audi'){
      echo "RESERVED";
    } else {
      echo "FREE";
    }
  }
  private function poid($poid){
    if($poid > 3.5){
      echo "UTILITAIRE";
    }  else {
      echo "COMMERCIAL";
    }
  }
  private function from($pays){
    switch ($pays) {
      case 'BE':
        echo "FROM BELGIUM";
        break;
      case 'FR':
        echo "FROM FRANCE";
        break;
      case 'GR':
        echo "FROM GERMANY";
        break;
      default:
        echo "FROM NOWHERE";
        break;
    }
  }
  public function km($km){
    if($km < 100.000){
      echo "LOW";
    } elseif ($km >=100.000 AND $km < 200.000) {
      echo "MIDDLE";
    } else {
      echo "HIGH";
    }
  }
  private function age($circulation){
    $temps = date('Y');
    $age = $temps - $circulation;
    echo $age . "ANS";
  }
  public function drive($km){
    echo $km += 100.000;
  }
}

$Audi = new Voiture('Audi', 3.7,'BE',50.000, 2011); echo '</br>';
$Dacia = new Voiture('Dacia',5.4,'FR',12.000,2016); echo '</br>';

$Audi->drive($Audi->km);
$Audi->km($Audi->km);

 ?>
