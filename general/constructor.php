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
    function get_name(){
    	return $this->name;
    }
    function get_color(){
    	return $this->color;
    }
    function get_flv() {
    	return $this->flv;
    } 
}
$orange = new Fruits("Apple","Red","Fine");
echo $orange->get_name();
echo "<br>";
echo $orange ->get_color();
echo "<br>";
echo $orange->get_flv();
echo "<br>";
?>
 
</body>
</html>
