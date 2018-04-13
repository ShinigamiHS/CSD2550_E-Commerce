<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$search = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$products = $db->customers->find(array('email' => $search));
echo $products["past orders"];
$mongoClient->close();
 ?>
