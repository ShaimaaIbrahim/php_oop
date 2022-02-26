<?php



//This examples for this psedu variable--- and functions and properties--
//[::] scope resolution operator
//self refer to class and constatnts inside it--
//difference between self and this
//1-self refer to current class  (vs) this refer to current object
//2-self deal with static members  (vs) deals with variables
//3-self use ($) this uses ($) 

class AppleDevice{
    public $ram ='2GB';
    public $inch= '14inch';
    public $space = '64gb';
    public $color;



    public function changeSpec($r , $in, $spec, $co){
          $this->ram = $r;
          $this->inch = $in;
          $this->space = $spec;
          $this->color = $co;
    }

}

$iphone7Plus = new AppleDevice();

$iphone7Plus->changeSpec('50GB', '5Inch', '32GB', 'GOLD');

echo '<pre>';

echo var_dump($iphone7Plus);

?>
