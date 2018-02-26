<?php

function outputCMSHeader() {
    //outputs the main HTML tags
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<title>MoniShopCMS</title>';
    echo '<link href="CMSapearance.css" type="text/css" rel="stylesheet">';
    echo '</head>';
    echo '<body>';
}
function outputMain() {
  //loops through an array to create the NavBar
    echo '<ul class="NavBar">';

    $CMSpages = array("Home", "View all stock", "Add items", "Remove items", "Edit products", "Review orders");
    $CMSpageRef = array("cmsHome.php", "cmsStock.php", "cmsAdd.php", "cmsRemove.php", "cmsEdit.php", "cmsOrders.php");
    for ($i = 0; $i < count($CMSpages); $i++) {
      echo '<li><a href="' . $CMSpageRef[$i] . '">' . $CMSpages[$i] . '';
      echo '</a></li>';
    }
    echo '</ul>';
}

function stockList() {
  //outputs the products inside the stock list
  for ($i = 0; $i < 7; $i++) {
    echo '<tr>';
    echo '<td>Samsung</td>';
    echo '<td>QE75Q8CAMTXXU</td>';
    echo '<td>75"</td>';
    echo '<td>Curved QLED Ultra HD Premium HDR Smart 4K</td>';
    echo '<td>4719.00</td>';
    echo '</tr>';
  }
}

function outputEndCMS() {
  //outputs the end tags
  echo '</body>';
  echo '</html>';
}
