<html>
<body>

<?php
class Fruits {
	  public $name;
    public $color;
    public $flv;
    
    function __construct($name, $color,  $flv){
    	  $this->name = $name;
        $this->color = $color;
        $this->flv = $flv;
    }
    function __destruct(){
    	echo "Fruit name: {$this->name} Color: {$this->color} Flavour: {$this->flv}";
    }
}
$orange = new Fruits("Orange", "Red", "Fine");
?>
 
</body>
</html>
