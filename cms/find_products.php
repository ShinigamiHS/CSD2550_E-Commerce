<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$products = $db->products->find();

$arr = array();
foreach($products as $k) {
    $temp = array("brand" => $k["brand"], "model" => $k["model"], "size" => $k["size"], "tags" => $k["tags"], "price" => $k["price"], "stock" => $k["stock"]);
    array_push($arr, $temp);
}

echo json_encode($arr);

$mongoClient->close();
 ?>
