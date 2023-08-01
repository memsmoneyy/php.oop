<?php
class Fruit{
    private $name;
    private $color;

    public function set_name($name) {
        $this->name =$name;
    }

    public function get_name() {
      return $this->name;
    }
public function set_color($color) {
    $this->color =$color;
}

public function get_color() {
   return $this->color;

}

}


//instantiate the class with four different types of fruits

$apple =new fruit ();
$apple->set_name("Apple");
$apple-> set_color("Red");

$banana =new fruit ();
$banana->set_name("Banana");
$banana-> set_color("Yellow");

$orange =new fruit ();
$orange->set_name("Orange");
$orange-> set_color("Orange");

$grape =new fruit ();
$grape->set_name("Grape");
$grape-> set_color("Purple");

//Access the properties using get_name() and get_color() methods

echo $apple->get_name() ."-". $apple->get_color()."\n";
echo $banana->get_name() ."-". $banana->get_color()."\n";
echo $orange->get_name() ."-". $orange->get_color()."\n";
echo $grape->get_name() ."-". $grape->get_color()."\n";


?>
