<?php
$mongoClient = new MongoClient();
$db = $mongoClient->ecommerce;
$collection = $db->products;

$fullName = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_NUMBER_FLOAT,
FILTER_FLAG_ALLOW_FRACTION);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);

$dataArray = [
    "full Name" => $fullName,
    "email" => $email,
    "password" => $password,
    "address" => $address,
];
if($fullName == "" || $email == "" || $password == "" || $address == "" ){
    echo 'Some fields might be missing and/or wrong.';
    exit();
} else {
    $returnVal = $collection->insert($dataArray);
}

if($returnVal['ok']==1){
    echo 'Thank you ' . $fullName . " for Registering";
}else {
    echo 'Error adding product';
}

$mongoClient->close();
 ?>