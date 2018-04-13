<?php
    $mongoClient = new MongoClient();
    $db = $mongoClient->ecommerce;
    $collection = $db->customers;
    $newCartItem = filter_input(INPUT_POST, 'newCartItem', FILTER_SANITIZE_STRING);
    $splitItem = explode(" ", $newCartItem);
    session_start();

    if(isset($_SESSION['loggedInUserEmail']) == false) {
        echo 'You need to be logged in to add items to a cart';
        return;
    } else {
        $customerSession = $_SESSION['loggedInUserEmail'];
        echo $splitItem[1];
        $customer = $collection->find(array("email" => $customerSession));
    }


    $mongoClient->close();
?>
