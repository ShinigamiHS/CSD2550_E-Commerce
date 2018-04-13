<?php
    $mongoClient = new MongoClient();
    $db = $mongoClient->ecommerce;
    $collection = $db->customers;
    $newCartItem = filter_input(INPUT_POST, 'newCartItem', FILTER_SANITIZE_STRING);
    $splitItem = explode(" ", $newCartItem);
    echo $splitItem[1];

    $customerSession = $_SESSION['loggedInUserEmail'];
    if($customerSession == "") {
        echo 'You need to be logged in to add items to a cart'
        return;
    } else {
        $customer = $collection->find(array("email" => $customerSession));
    }


    $mongoClient->close();
?>
