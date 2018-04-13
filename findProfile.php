<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$user = $db->customers->findOne(array(email));

$arr = array();
foreach($user as $k) {
    $temp = array("id" => $k['_id'],"full name" => $k["full name"], "email" => $k["email"], "address" => $k["address"], "pastorders" => $k["past orders"]);
    array_push($arr, $temp);
}

echo json_encode($arr);

$mongoClient->close();
 ?>
