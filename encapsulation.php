<?php

// change private properties only using method inside this class

class AppleDevice{
    public $ram ='2GB';
    public $inch= '14inch';
    public $space = '64gb';
    public $color  ='Gold';
    private $lock;



    public function changeSpec($r , $in, $spec, $co){
          $this->ram = $r;
          $this->inch = $in;
          $this->space = $spec;
          $this->color = $co;
    }


    public function changeLock($loc){
        $this->lock = sha1($loc);
    }
}

$iphone7Plus = new AppleDevice();
$iphone7Plus->changeLock('shaima"134');

echo '<pre>';

echo var_dump($iphone7Plus);

?>
