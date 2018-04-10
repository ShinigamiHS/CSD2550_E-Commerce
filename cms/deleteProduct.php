<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$search = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$remaining = $db->products->count(array('model' => $search));

if($remaining > 0) {
    $db->products->remove(array('model' => $search));
    echo 'Product with ' . $search . ' model name deleted';
}else {
    echo 'No product found with model ' . $search . '';
}

$mongoClient->close();
 ?>
