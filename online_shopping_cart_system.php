<!DOCTYPE html>
<html>
<body>

<?php
class Product {
  public $id;
  public $name;
  public $price;
  

  function __construct($id, $name, $price) {
    $this->id = $id; 
    $this->name = $name; 
    $this->price = $price;
    	$price = strval($price);
    
  }
  function get_id() {
    return $this->id;
  }
   function get_name() {
    return $this->name;
  }
  function getFormattedPrice() {
  	
    return $this->price;
  }
  
}

$product = new Product(1, 'T-shirt', 19.99);
echo $product->get_id();
echo "<br>";
echo $product->get_name();
echo "<br>";
echo $product->getFormattedPrice();
?>
 
</body>
</html>
