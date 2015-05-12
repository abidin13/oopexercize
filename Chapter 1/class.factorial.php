<?php
 class factorial 
 {
     private $result = 1; 
     private $number;
     function __construct($number)
     {
         $this->number = $number;
         for($i=2; $i<=$number; $i++)
         {
             $this->result *= $i;
         }
         echo "__construct() executed.";
         
     }
     
     function factorial($number)
     {
         $this->number = $number;
         for($i=2; $i<=$number; $i++)
         {
             $this->result *= $i;
         }
         echo "factorial() executed.";
         
     }
     
     function __destruct()
     {
         echo"Object Destroyed.";
     }
     
     public function showResult()
     {
         echo"factorial of {$this->number} is {$this->result}.";
     }
        
 }

?>