<h3>Object and Array</h3>

<?php
class Product
{
    public $name;
    public $price;
}

$product1 = new Product();
$product1->name = "Product 1";
$product1->price = 100;

$product2 = new Product();
$product2->name = "Product 2";
$product2->price = 200;

$product3 = new Product();
$product3->name = "Product 3";
$product3->price = 300;

// $products = array($product1, $product2, $product3);
$products = [$product1, $product2, $product3];
?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach ($products as $product) { ?>
        <tr>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->price; ?></td>
        </tr>
    <?php } ?>
</table>