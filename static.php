<?php


class Iphone{

    public static $name = 'max pro';
    public $ram = '32 GB';


   public static function sayHello(){
        return 'Hello static method';
    }



}

$phone = new Iphone();

//can call static method from object or using global class-----------------
echo Iphone::sayHello() .'<br>';
echo $phone->sayHello();

//can call static property from  using global class only  -----------------

echo Iphone::$name . '<br>';


?>