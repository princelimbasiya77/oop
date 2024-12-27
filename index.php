<?php

    class myFirst
    {
        public $number;
        function myFunction(){
            echo "okay";
        }
        function myFunction2(){
            echo "okay";
        }
        function myPassValue($number){
            // echo $this->number = $number;
            return $this->number = $number;
            // echo $number;
        }
    }
    $obj = new myFirst();
    $obj1 = new myFirst();

    $obj -> myFunction();
    $obj -> myFunction2();
    $st = $obj -> myPassValue(12);
    echo $st;

?>



<?php
class ParentClass
	{
		function __construct()
		{
			echo "constructor";
		}
	}


$obj = new ParentClass();
?>


<!-- constructor , destructor -->