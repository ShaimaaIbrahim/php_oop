<?php


// to make class extends more than one class

trait FingerPrint(){

    public function writeFinger(){
        echo 'hello fingerprint';
          return this;
    }
    public function showDetails(){
        echo 'hello showDetails';
        return this;
    }

}

trait ThreeDimensions(){

    public function writeThreeDimensions(){
        echo 'hello fingerprint';
        return this;
    }
    public function showDiminsions(){
        echo 'hello showDetails';
        return this;
    }
    
}


trait AllFeatures{
    use FingerPrint, ThreeDimensions;

}

class Iphone{

    use AllFeatures;
}

class Nokia{
    use FingerPrint;
}

class Sony{
    use ThreeDimensions;

}

$phone = new Iphone();
$phone->showDiminsions()->writeThreeDimensions()->showDetails()->writeFinger();


trait Feature1{
     function sayHello(){

     }

}

trait Feature2{
    function sayHello(){
        
    }

}


class Phone {
 
    //to resolve collisions ----
    //traitName :: MethodName insteadof otherTraitName
    use Feature1, Feature2{

        Feature2::sayHello as shaimaa;
        Feature1:: sayHello insteadOf Feature2;
    }

}

$p = new Phone();
$p->sayHello();
$p->shaimaa;

?>