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

  public function __construct($model,$poid,$pays,$km,$circulation){
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

$Audi = new Voiture('Audi', 3.7,'BE',50000, 2011); echo '<hr>';
$Dacia = new Voiture('Dacia',5.4,'FR',12000,2016); echo '<hr>';
$Mazda = new Voiture('Mazda',0.9,'JA',110000,2009); echo '<hr>';

$voitures = [$Audi,$Dacia,$Mazda];
foreach ($voitures as $voiture) {?>
  <table>
    <tr>
      <td><?php echo $voiture->getModel() ?></td>
      <td><?php echo $voiture->getPoid() ?></td>
      <td><?php echo $voiture->getPays() ?></td>
      <td><?php echo $voiture->getKm() ?></td>
      <td><?php echo $voiture->getCirculation() ?></td>
    </tr>
  </table>
<?php }

echo $Audi->drive(); echo '<hr>';
echo $Audi->getKm();


  ?>
