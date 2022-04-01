<?php

  class Phone{

    function sayHello(){
        echo 'Heello <br>';
        return this;
    }

    function powerPhone(){
        echo 'poer phone <br>';
        return this;
    }


  }

  $phone = new Phone();

  // can chain all methods inside class using return this inside all methods--
  $phone->sayHello()->powerPhone();


?>