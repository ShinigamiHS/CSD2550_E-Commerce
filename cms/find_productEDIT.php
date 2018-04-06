<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$search = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$products = $db->products->find(array('model', $search));

$arr = array();
foreach($products as $k) {
    $temp = array("brand" => $k["brand"], "model" => $k["model"], "size" => $k["size"], "tags" => $k["tags"], "price" => $k["price"]);
    array_push($arr, $temp);
}

echo json_encode($arr);

$mongoClient->close();
 ?>
