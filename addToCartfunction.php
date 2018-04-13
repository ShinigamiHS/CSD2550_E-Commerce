<?php
    $mongoClient = new MongoClient();
    $db = $mongoClient->ecommerce;
    $collection = $db->customers;
    $collectionProd = $db->products;
    $newCartItem = filter_input(INPUT_POST, 'newCartItem', FILTER_SANITIZE_STRING);
    $splitItem = explode(" ", $newCartItem);
    session_start();
    $product = $collectionProd->find(array("model" => $splitItem));

    if(isset($_SESSION['loggedInUserEmail']) == false) {
        echo 'You need to be logged in to add items to a cart';
        return;
    } else {
        $customerSession = $_SESSION['loggedInUserEmail'];
        $customer = $collection->find(array("email" => $customerSession));
        $newdata = array('$set' => array("cart" => $product));
        $collection->update(
            array("email" => $customerSession), $newdata);
        echo 'item added to your cart';
    }
    $mongoClient->close();
?>
