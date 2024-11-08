<div>Read JSON</div>
<?php
    $json = file_get_contents("product.json");
    $data = json_decode($json,true);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php foreach($data as $product){ ?>
        <tr>
            <th><?php echo $product["id"]; ?></th>
            <th><?php echo $product["name"]; ?></th>
            <th><?php echo $product["price"]; ?></th>
        </tr>
    <?php } ?>
</table>