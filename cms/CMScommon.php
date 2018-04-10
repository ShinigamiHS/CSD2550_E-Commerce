<?php

function outputCMSHeader() {
    //outputs the main HTML tags
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<title>MoniShopCMS</title>';
    echo '<link href="CMSapearance.css" type="text/css" rel="stylesheet">';
    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
    echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
    echo '</head>';
    echo '<body>';
}
function outputMain() {
  //loops through an array to create the NavBar
    echo '<ul class="NavBar">';

    $CMSpages = array("Home", "View all stock", "Add items",  "Edit products", "Review orders");
    $CMSpageRef = array("cmsHome.php", "cmsStock.php", "cmsAdd.php", "cmsEdit.php", "cmsOrders.php");
    for ($i = 0; $i < count($CMSpages); $i++) {
      echo '<li><a href="' . $CMSpageRef[$i] . '">' . $CMSpages[$i] . '';
      echo '</a></li>';
    }
    echo '</ul>';
}

function outputEndCMS() {
  //outputs the end tags
  echo '</body>';
  echo '</html>';
}
