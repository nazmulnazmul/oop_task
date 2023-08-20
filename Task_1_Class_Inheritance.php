
<?php

// create a Shape class
    class Shape {
        
        private $radius;
        private $width;
        private $height;  

     }

     // create a Circle class with extends Shape class
     class Circle extends Shape {
        
         public function __construct($radius) {
             $this->radius = $radius;
         }
      
         public function calculateArea() {
             return pi() * pow($this->radius, 2);
         }

     }
    
     // create a Rectangle class with extends Shape class
     class Rectangle extends Shape {

         public function __construct($width, $height) {
             $this->width = $width;
             $this->height = $height;
         }
      
         public function calculateArea() {
             return $this->width * $this->height;
         }
     }
    
     //Create a Circle  Object 
     $circle = new Circle(2);
     echo "<b style='color:green;'>Circle Area :</b> " . $circle->calculateArea() . "<br>";
      
     //Create a Rectangle Object 
     $rectangle = new Rectangle(6, 12);
     echo "<b style='color:green;'>Rectangle Area : </b>" . $rectangle->calculateArea() . "\n";
     
?>