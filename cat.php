<?php
class Animal{
    function __construct($name) {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

class Cat extends Animal{
    public function meow(){
        echo "Cat {$this->getName()} is saying meow";
    }
}

$cat = new Cat ('garfield');
$cat->meow ();