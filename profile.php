<?php
  /*outputNavBar and outputHeader is used on all the main shop pages to make sure not alot of HTML code is re-used
    */
    include('common.php');

    outputHeader("MoniShop");
    outputNavBar();
?>
<?php
  //outputSearchBar is used in the same manner as the two functions above
    outputSearchBar();
 ?>
<?php
  //this function outputs the 2 closing tags in HTML
outputEndHTML();
