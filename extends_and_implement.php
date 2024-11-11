<h3>Extends and Implement</h3>

<?php

interface ProductInterface {
    public function getInfo();
}

class ParentClass
{
    function getInfo(){
        return "Parent Class";
    }
}

Class Product extends ParentClass implements ProductInterface
{
    function getInfo(){
        return "Product";
    }
}

$product = new Product();
echo $product->getInfo();
?>