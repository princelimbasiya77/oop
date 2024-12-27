<?php

   
  
class MyClass
	{
        
       
            // public $name;
            // public $color;
          
            // function __construct($name) {
            //   $this->name = $name; 
            // }
            // function __destruct() {
            //   echo "The color is {$this->name}"; 
            // }

            public $number = 10;

            function demo($number) {
             $total = $this->number + $number; 
             echo"<br>".$total; 

            }
            
     
          
	}
    // $color = new MyClass("red");

    $obj = new MyClass();
    $obj1 = new MyClass();
    $obj2 = new MyClass();
     $obj -> demo(12);
     $obj1 -> demo(120);
     $obj1 -> demo(10);






?>


<!-- constructor , destructor -->