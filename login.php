<?php
  //in the login and register pages there is no direct connection to the brand pages so we only use the outputHeader function
    include('common.php');
    outputHeader("MoniShop");
?>
<!-- instead of the outputNavBar we only use a single link to the main shop page -->
<div class="loginLogo" >
  <a href="index.php">
    <img src="images\WebsiteLogo.png" />
  </a>
</div>

<!-- the login div is displayed with 2 input boxes for the email address and the password, at the bottom there's a link to the registration page -->
<div class="loginDiv">
  <div class="loginDiv2">
    <p3>Email address</p3><br />
    <input class="inputBox" id="loginName" type="text" name="loginName" required><br />
    <p3>Password</p3><br />
    <input class="inputBox" id="loginPwd" type="password" name="loginPwd" required><br />
    <button onclick="checkLogin()">Login</button><br />
    <p4>Don't have an account yet? Register <a href="register.php">here</a></p4>
  </div>
</div>
<?php
  //this function outputs the 2 closing tags in the HTML language
    outputEndHTML();
