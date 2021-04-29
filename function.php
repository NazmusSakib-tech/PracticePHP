<?php 

 class calculation {
     public $name ;
     public $age;
     const NAME = "Shamima Mustarin Sabrin";

     function __construct($age1, $name1)
     {
         $this->name = $name1;
         $this->age = $age1;

         echo $age1;

     }

    function add($a, $b){
        echo "Addition Number is: ".($a+$b)."</br>";
    }

    function dispaly(){

        echo "My wife name is ".calculation::NAME;
    }


}




?>