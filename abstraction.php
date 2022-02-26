<?php

//abstract class can not be instanciated  (can not create object from)
//made for inheritance only--

abstract class MakeDevice{

    public $ram;

     abstract public function testPerformance();
     abstract public function verifyOwner();
     abstract public function sayHello($name);


}

class Iphone extends MakeDevice{

    
    public $owner;


    public function  testPerformance(){
        echo 'Hehho Hllo'; 
    }
       
    public function  verifyOwner(){
        echo 'Hehho Hllo'; 
    }
       
    public function  sayHello($name){
        $this->owner = $name;

        echo 'Hehho Hllo' .$name; 
    }
}

class IPad extends MakeDevice{

    public $owner;

    public function  testPerformance(){
        echo 'Hehho Hllo'; 
    }
       
    public function  verifyOwner(){
        echo 'Hehho Hllo'; 
    }
       
    public function  sayHello($name){
        $this->owner = $name;
        echo 'Hehho Hllo'; 
    }
}



$iphone = new Iphone();

$ipad = new IPad();

$ipad->sayHello('shaomaa');
echo '<br>';
$iphone->verifyOwner();
echo '<br>';

echo $ipad->owner;
echo '<pre>';

var_dump($iphone);

?>
