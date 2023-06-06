<?php
class Fruit {
    //Properties
    public $name;
    public $color;

    function set_name($name) {
        $this->name = $name;
    }
    function gat_name() { 
        return $this->name;
    }
}

class ClassName {
    public static function staticMethod() {
        echo " Hello Word!";
    }
}

ClassName::staticMethod();

?>