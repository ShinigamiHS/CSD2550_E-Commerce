<?php
    //Start session management
    session_start();

    if( array_key_exists("loggedInUserEmail", $_SESSION) ){
        echo "ok";
    }
    else{
        return;
    }
