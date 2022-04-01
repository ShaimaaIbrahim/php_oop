<?php


public Phone(){

    public $name;
    public $ram;


    public void __construct($n, $r){
        echo 'hello' .$r .$n;
    }

    //when person try to call not found method in class
    public void __call($method, $params){
       echo 'method not found or not accessable';
    }

    //try to call property not found in class
    public void __get($prop){
       echo 'property not accessible or found ' ;   
    }

    //prevent user from assign new property to class
     public void __set(){
           echo '';
}

//is performed when cloning
//is performed when a class contains object from another class 
public __clone(){
 $this->name = clone $this->name;
}



}

$phone = new Phone('iphone', '32ram');
$phone->color = 'red';

//copy object to another one

$copy = clone $phone;

$copy->name = 'Ahmed';
$phone->name ='Mahmoud';


print_r($copy);
print_r($phone);

?>