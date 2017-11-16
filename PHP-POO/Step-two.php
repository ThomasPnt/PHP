<?php

Class Html{

  public $link;
  public $img;
  public $lien;
  public $value;
  public $js;

  public function link($link){
    echo "<link rel='stylesheet' href='$link'>";
  }
  public function meta(){
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<meta http-equiv='X-UA-Compatible' content='ie=edge'>";
  }
  public function image($img){
    echo "<img src='$img'>";
  }
  public function lien($lien,$value){
    echo "<a href='$lien' target=_blank>$value</a>";
  }
  public function js($js){
    echo "<script type='text/javascript' src='$js'></script>";
  }
}


 ?>

<html>
  <head>
    <?php
    $html = new Html;
    $html->link('style.css');
    $html->meta();
    ?>
  </head>
  <body>
    <?php
    $html->image('/pdo/image1.jpg');
    $html->lien('https://www.google.be/','Google');
    $html->js('./javascript.js');
     ?>
  </body>
</html>
