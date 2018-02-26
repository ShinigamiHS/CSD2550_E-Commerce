<?php
  /*outputNavBar and outputHeader is used on all the main shop pages to make sure not alot of HTML code is re-used
    */
    include('common.php');

    outputHeader("MoniShop");
    outputNavBar();
?>
<!-- This section of the list is separate from the rest of the php function because it has unique properties such as the dropdown menu on the account tab and a smaller "box" on the cart -->
<li>
    <div class="dropdown">
        <button class="dropbtn">
          <img src="images\UserLogo2.png">
        </button>
        <div class="dropdown-content">
            <a href="login.php">Log In</a>
            <a href="register.php">Register</a>
        </div>
    </div>
</li>
<li>
  <a class="shoppingCart" href="cart.php">
    <img src="images\shoppingCart.png"/>
  </a>
</li>
</ul>
<?php
  //outputSearchBar is used in the same manner as the two functions above
    outputSearchBar();
 ?>
<div class="AsusProdDiv_2">
<!-- creates a "brand header" with a featured monitor and some info about it, in this one theres again only one monitor and some info, but CSS3 is used to fade in the "ROG" logo -->
    <span class="AsusProdPic_3">
        <img src="images\AsusProd1.png" />
    </span>
    <span class="AsusProdInfo_2">
      <h3>35 inch UWQHD (3440x1440)</h3>
      <h3>100Hz, Adaptive-Sync</h3>
    </span>
    <span class="ROGLogo">
      <img src="images\ROGLogo.png" />
    </span>
</div>

<!-- The filters section and the (at the moment 8) boxes for the products are generated using php -->
<div class="AsusBrandDiv">
  <?php
    ItemFilters();
   ?>
  <span class="mainItemDiv">
    <?php
      itemDivs();
    ?>
  </span>
</div>

<?php
  //this function outputs the 2 closing tags in the HTML language
    outputEndHTML();
