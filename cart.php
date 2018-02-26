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
<!-- The cart is displayed using 2 divs that will then be editted when items are picked by the customer -->
<div class="cartDiv2">
  <div class="cartDiv1">
    <h6>Your cart is empty...</h6>
    <h7>Why not browse through our shop <br />and treat yourself to a new screen.</h7>
    <div>
      <img src="images\WebsiteLogo.png"/>
    </div>
  </div>
</div>

<?php
  //this function outputs the 2 closing tags in the HTML language
outputEndHTML();
