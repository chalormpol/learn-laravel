<h3>Casting object</h3>

<?php
    class Product
    {
        public $name;
        public $price;
        
        public function __toString()
        {
            return "Product:  . {$this->name}, Price:  . {$this->price}";
        }
    }

    class Product2 {
        public $name;
        public $price;
    }

    $product = new Product();
    $product->name = 'iphone';
    $product->price = 1000;

    $array = (array) $product;
    print_r($array);
    echo "<br>";

    echo (string) $product;
    echo "<br>";

    $product2 = new Product2();
    $product2 = (object) $array;
    print_r($product2)
    
?>