<?php
    //Start session management
    session_start();

    if($_SESSION['loggedInStaffEmail'] == "claudio@monishop.com" || $_SESSION['loggedInStaffEmail'] == "anwar@monishop.com"){
        echo "ok";
    }
    else{
        echo "no";
    }
