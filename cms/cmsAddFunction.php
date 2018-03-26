<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$collection = $db->products;

$brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_STRING);
$model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$screen = filter_input(INPUT_POST, 'screenSize', FILTER_SANITIZE_NUMBER_FLOAT);
$tags = filter_input(INPUT_POST, 'tags', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT);

$dataArray = [
    "brand" => $brand,
    "model" => $model,
    "size" => $screen,
    "tags" => $tags,
    "price" => $price
];

$returnVal = $collection->insert($dataArray);

if($returnVal['ok']==1){
    echo 'ok';
}else {
    echo 'Error adding products';
}

$mongoClient->close();
 ?>
