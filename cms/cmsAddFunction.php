<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$collection = $db->products;

$brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_STRING);
$model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$screen = filter_input(INPUT_POST, 'screenSize', FILTER_SANITIZE_NUMBER_FLOAT,
FILTER_FLAG_ALLOW_FRACTION);
$tags = filter_input(INPUT_POST, 'tags', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT,
FILTER_FLAG_ALLOW_FRACTION);
$stock = filter_input(INPUT_POST, 'stock', FILTER_SANITIZE_NUMBER_FLOAT);

$splitTags = explode(" ", $tags);

$dataArray = [
    "brand" => $brand,
    "model" => $model,
    "size" => $screen,
    "tags" => $splitTags,
    "price" => $price,
    "stock" => $stock
];
if($brand == "" || $model == "" || $screen == "" || $tags == "" || $price == "" || $stock == ""){
    echo 'Some fields might be missing and/or wrong.';
    exit();
} else {
    $returnVal = $collection->insert($dataArray);
}

if($returnVal['ok']==1){
    echo '' . $brand . ' ' . $model . ' added to the database';
}else {
    echo 'Error adding product';
}

$mongoClient->close();
 ?>
