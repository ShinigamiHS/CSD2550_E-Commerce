<?php
    $mongoClient = new MongoClient();
    $db = $mongoClient->ecommerce;
    $collection = $db->customers;

    $fullName = filter_input(INPUT_POST, 'fullName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);

    $dataArray = [
        "full name" => $fullName,
        "email" => $email,
        "password" => $password,
        "address" => $address,
        "past orders" => []
    ];
    if($fullName == "" || $email == "" || $password == "" || $address == "" ){
        echo 'Some fields might be missing and/or wrong.';
        exit();
    } else {
        $returnVal = $collection->insert($dataArray);
    }

    if($returnVal['ok']==1){
        echo 'Thank you ' . $fullName . " for registering";
    }else {
        echo 'Error creating account';
    }

    $mongoClient->close();
 ?>
