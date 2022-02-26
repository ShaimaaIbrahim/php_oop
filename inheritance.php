<?php

//final method i can not make override from it
//final class can not be inherited (save encapsulation mean )

class AppleDevice{
    public $ram ='2GB';
    public $inch= '14inch';
    public $space = '64gb';
    public $color  ='Gold';
    public $screen= 'LCD';
    public $name;



    public function changeSpec($r , $in, $spec, $co){
          $this->ram = $r;
          $this->inch = $in;
          $this->space = $spec;
          $this->color = $co;
    }

    final public function sayLHello($n){
        $this->name = $n; 
        echo 'Hello' .$n;
    }
}


class Sony extends AppleDevice{

    public $camera= '2MB';


    public function changeSpecs($r , $in, $spec, $co, $ca){
          $this->ram = $r;
          $this->inch = $in;
          $this->space = $spec;
          $this->color = $co;
          $this->camera = $ca;
    }
    //overriding method from parent--------------------------------------------------
   /* public function sayLHello($n){
        $this->name = $n; 
        echo 'Hello' .$n .' this phone contains ' .$this->ram .' Ram';
    }*/
}


$iphone = new AppleDevice();
$iphone->sayLHello('Iphone');
$iphone->changeSpec('50GB', '5Inch', '32GB', 'GOLD');

echo '<br>';
echo '<br>';
echo '<br>';


$sony = new Sony();
$sony->sayLHello('Sony');
$sony->changeSpec('50GB', '5Inch', '32GB', 'GOLD');

echo '<pre>';
echo var_dump($iphone);


echo '<pre>';
echo var_dump($sony);
?>
