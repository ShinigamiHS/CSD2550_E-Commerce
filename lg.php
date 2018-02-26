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
<div class="LGProdDiv_2">
<!-- creates a "brand header" with a featured monitor and some info about it, only a single monitor and some info with no animation in this case -->
    <span class="LGProdPic_3">
        <img src="images\LGProd3_1.png" />
    </span>
    <span class="LGProdInfo_2">
      <br />
      <h3>LG OLED Hub. Simplicity. Perfection. </h3>
      <h3>DOLBY ATMOS®- Cinematic Sound for your Home</h3>
      <h3>The Ultimate HDR 4K Picture</h3>
    </span>
</div>

<!-- The filters section and the (at the moment 8) boxes for the products are generated using php -->
<div class="LGBrandDiv">
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
