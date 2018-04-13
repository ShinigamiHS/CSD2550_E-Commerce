<?php
    $mongoClient = new MongoClient();
    $db = $mongoClient->ecommerce;
    $collection = $db->customers;

    if()
    $email = filter_input(INPUT_POST, 'loginEmail', FILTER_SANITIZE_STRING);

    $cursor = $db->customers->find(array("email" => $email));
