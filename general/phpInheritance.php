<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
    public $name;
    public $color;
    public $flv;
    public function __construct($name, $color, $flv){
    	$this->name = $name;
        $this->color = $color;
        $this->flv = $flv;
    } 
    public function inheritProperties() {
    	echo "Fruit name : {$this->name} Fruit color: {$this->color} <br> fruit flaveour :{$this->flv}";
    }
    
}

// mango is inherited from Fruits
class Mango extends Fruits {
	public function txt(){
    	echo "An instance on fruit class.<br>";
    }
}
$mango = new Mango("Mango", "Orange", "Nice");
$mango->txt();
$mango->inheritProperties();
?>
 
</body>
</html>