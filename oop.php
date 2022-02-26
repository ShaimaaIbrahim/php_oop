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
    public $space = '100gb';
    public $ownerName;
    const CHIP ="9A";
    const MINCHIPS = 5;
    const OWNERNAME= 5;



    public function doubleHomePressed(){
        echo 'you have pressed home button twice';
    
    }

    public function getSpecifcations(){
        echo 'This specifications is :' .$this->ram . '<br>';
    }

    public function setOwnerName($owner){
        if(strlen($owner) < 3){
            echo '<h1>Owner name can not less than <strong>3</strong> characters</h1>';
        }else{
            echo '<h1>this name can not be set</h1>';
        }
    }
    public function chexkOwnerName($owner){

        if(strlen($owner) < self::OWNERNAME){
            //to print constant inside class--
            echo 'Owner name can not less than  ' .self::OWNERNAME  .' CHARS';
        }else{
            echo '<h1>this name can not be set</h1>';
        }
    }

}

//to print constant outside class
echo AppleDevice::OWNERNAME;


echo '<pre>';

$iphone6Plus = new AppleDevice();
//to print constant outside class by using object
echo $iphone6Plus::OWNERNAME;

$iphone6Plus->ram = '2GB';
$iphone6Plus->space ='200GB';
$iphone6Plus-> inch = '14inch';
$iphone6Plus->color = 'red';


echo '<pre>';

$iphone7Plus = new AppleDevice();
$iphone7Plus->colors ='white';
$iphone = new AppleDevice();

var_dump($iphone6Plus);
echo '<pre>';

var_dump($iphone7Plus);
echo '<pre>';

var_dump($iphone);
echo '<pre>';

$iphone->doubleHomePressed();
echo '<pre>';
$iphone->getSpecifcations();
echo '<pre>';

$iphone->ownerName= 'OS';

echo '<pre>';

$iphone->setOwnerName('shaimaa');

echo '<pre>';


$iphone->chexkOwnerName('sh');

?>
