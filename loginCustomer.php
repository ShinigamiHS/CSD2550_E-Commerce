<?php
    $mongoClient = new MongoClient();
    $db = $mongoClient->ecommerce;
    $collection = $db->customers;

    $email = filter_input(INPUT_POST, 'loginEmail', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'loginPwd', FILTER_SANITIZE_STRING);
    $loginCheck = filter_input(INPUT_POST, 'loginCheck');
    $cursor = $db->customers->find(array("email" => $email));

    //Check that there is exactly one customer
    if($cursor->count() == 0){
        echo 'Email not recognized.';
        exit();
    }
    else if($cursor->count() > 1){
        echo 'Error: Multiple customers have the same email address.';
        exit();
    }

    //Get customer
    $customer = $cursor->getNext();

    //Check password
    if($customer['password'] != $password){
        echo 'Password incorrect.';
        exit();
    } else if($customer['password'] == $password){
        session_start();
        //Start session for this user
        $_SESSION['loggedInUserEmail'] = $email;
        $_SESSION['loggedInUserName'] = $customer['full name'];

        //Inform web page that login is successful
        echo '' . $customer["full name"] . ' logged in. Welcome!';
    }

    //Close the connection
    $mongoClient->close();
