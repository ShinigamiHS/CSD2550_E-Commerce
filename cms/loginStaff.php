<?php
    $mongoClient = new MongoClient();
    $db = $mongoClient->ecommerce;
    $collection = $db->staff;

    $email = filter_input(INPUT_POST, 'staffEmail', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'staffPwd', FILTER_SANITIZE_STRING);
    $cursor = $db->staff->find(array("staff email" => $email));

    if($cursor->count() == 0){
        echo 'Email not recognized.';
        exit();
    }
    else if($cursor->count() > 1){
        echo 'Error: Multiple members of staff have the same email address.';
        exit();
    }

    $staff = $cursor->getNext();

    if($staff['password'] != $password){
        echo 'Password incorrect.';
        exit();
    } else if($staff['password'] == $password){
        session_start();
        //Start session for this user
        $_SESSION['loggedInStaffEmail'] = $email;
        $_SESSION['loggedInStaffName'] = $staff['staff name'];

        //Inform web page that login is successful
        echo '' . $_SESSION['loggedInStaffName'] . ' logged in. Welcome!';
    }

    //Close the connection
    $mongoClient->close();
