<?php

Class Voiture{

  private $immatriculation;
  private $circulation;
  public $km;
  private $model;
  private $marque;
  private $couleur;
  private $poid;
  private $pays;
  public $name;

  public function __construct($name,$model,$poid,$pays,$km,$circulation){
    $this->name = $name;
    $this->model = $model;
    $this->poid = $poid;
    $this->pays = $pays;
    $this->km = $km;
    $this->circulation = $circulation;
  }

  public function getModel(){
    if($this->model === 'Audi'){
      echo "RESERVED";
    } else {
      echo "FREE";
    }
  }

  public function drive(){
    $this->km += 100000;
    return $this->km;
  }

  public function getName()
  {
    return strtoupper($this->name);
  }

  public function getCirculation()
  {
    $temps = date('Y');
    $age = $temps - $this->circulation;
    return $age . "ANS";
  }


  public function getKm()
  {
    if($this->km < 100000){
      echo "LOW";
    } elseif ($this->km >=100000 AND $this->km < 200000) {
      echo "MIDDLE";
    } else {
      echo "HIGH";
    }
  }

  public function getPoid()
  {
    if($this->poid > 3.5){
      echo "UTILITAIRE";
    }  else {
      echo "COMMERCIAL";
    }
  }

  public function getPays()
  {
    switch ($this->pays) {
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
}

$Audi = new Voiture('Audi','Audi', 3.7,'BE',50000, 2011);
$Dacia = new Voiture('Dacia','Dacia',5.4,'FR',12000,2016);
$Mazda = new Voiture('Mazda','Mazda',0.9,'JA',110000,2009);
$Nissan = new Voiture('Nissan','Nissan',1.5,'GR',90000,2010);
$BMW = new Voiture('BMW','BMW',1.8,'IT',2500,2017);
$Audi_100 = new Voiture('Audi 100','Audi',3.6,'GR',300000,1996);

$voitures = [$Audi,$Dacia,$Mazda,$Nissan,$BMW,$Audi_100];
foreach ($voitures as $voiture) {?>
  <table border='1'  width="100%">
      <tr align="center" ><td><strong><?php echo $voiture->getName() ?></strong></td></tr>
      <tr><td><?php echo $voiture->getModel() ?></td></tr>
      <tr><td><?php echo $voiture->getPoid() ?></td></tr>
      <tr><td><?php echo $voiture->getPays() ?></td></tr>
      <tr><td><?php echo $voiture->getKm() ?></td></tr>
      <tr><td><?php echo $voiture->getCirculation() ?></td></tr>
  </table>
<?php }

echo '</br>';echo '</br>';echo '</br>';
echo $Audi->drive(); echo '<hr>';
echo $Audi->getKm();


  ?>
