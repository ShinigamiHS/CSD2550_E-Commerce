<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
if($search == "") {
    $products = $db->products->find();
} else {
    $products = $db->products->find(array('tags' => $search));
}

$arr = array();
foreach($products as $k) {
    $temp = array("brand" => $k["brand"], "model" => $k["model"], "size" => $k["size"], "tags" => $k["tags"], "price" => $k["price"]);
    array_push($arr, $temp);
}

echo json_encode($arr);

$mongoClient->close();
 ?>
