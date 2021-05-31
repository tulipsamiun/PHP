<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
class Fruits {
    public $name;
    public $color;
    function set_name($name){
    	$this->name = $name;
    }
    function get_name() {
    	return $this->name;
    }
}
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$orange = new Fruits();
$mango = new Fruits();
$orange->set_name("Orange");
$mango->set_name("Mango");

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $orange->get_name();
echo "<br>";
echo $mango->get_name();
echo "<br>";
var_dump($orange instanceof Fruits);
echo "<br>";
var_dump($oqange instanceof Frout)
?>
 
</body>
</html>
