<?php

// Define a Animal calss
    class Animal {
        private $name;
    
        public function __construct($name) {
            $this->name = $name;
        }
    
        public function getName() {
            return $this->name;
        }
    
        public function makeSound() {
            // This method will be overridden in child classes
        }
    }

// Define Tigers class with entends Animal class
    class Tigers extends Animal {

        public function __construct($name) {
            parent::__construct($name);
        }
    
        public function makeSound() {
            return "Growl, Roar!";
        }
    }
    

// Define Horse class with entends Animal class
    class Horse extends Animal {
        public function __construct($name) {
            parent::__construct($name);
        }
    
        public function makeSound() {
            return "Neigh!";
        }
    }
    
// Define Pigs class with entends Animal class
    class Pigs extends Animal {

        public function __construct($name) {
            parent::__construct($name);
        }
    
        public function makeSound() {
            return "Snort, Grunt, Oink!";
        }
    }
    
  // Create a object
    $tiger = new Tigers("<b style='color:green;'>Tigers</b>");
    $horse = new Horse("<b style='color:green;'>Horse</b>");
    $pigs = new Pigs("<b style='color:green;'>Pigs</b>");
    
    // create a array
    $animals = [$tiger, $horse, $pigs];
    
    // create a foreach loop
    foreach ($animals as $animal) {
        echo $animal->getName() . "<b style='color:green;'> says : </b>" . $animal->makeSound() . "<br>";
    }


    
?>




