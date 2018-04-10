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

$dataArray = [
    "brand" => $brand,
    "model" => $model,
    "size" => $screen,
    "tags" => $tags,
    "price" => $price
];
if($brand == "" || $model == "" || $screen == "" || $tags == "" || $price == ""){
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
