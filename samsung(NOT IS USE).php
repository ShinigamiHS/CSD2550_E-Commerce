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
 <!-- creates a "brand header" with a featured monitor and some info about it, in this case there two monitors and both use CSS3 animations to create a kind of "slide and fade" animation for the products-->
<div class="SamsProdDiv_2">
  <span class="SamsDiv_1">
    <span class="mainProdPic_3">
        <img src="images\SamsungProd2.png" />
    </span>
    <span class="SamsProdInfo_2">
      <h3>Ultra HD Premium HDR</h3>
      <h3>75" Smart 4K Curved QLED</h3>
    </span>
  </span>
  <span class="SamsDiv_2">
    <span class="SamsProdInfo_3">
      <h3>65" Ultra HD</h3>
      <h3>Smart Certified HDR</h3>
    </span>
    <span class="SamsProdPic_2">
      <img src="images\SamsungProd4.png" />
    </span>
  </span>
</div>

<!-- The filters section and the (at the moment 8) boxes for the products are generated using php -->
<div class="mainBrandDiv">
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
