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

<!-- the registration div is displayed with 4 input boxes for the full name, email address, password, and address, at the bottom there's a link to the login page -->
<div class="regDiv">
  <div class="regDiv2">
    <p3>Full name</p3><br />
    <input class="inputBox" id="regName" type="text" name="regName" required><br />
    <p3>Email address</p3><br />
    <input class="inputBox" id="regMail" type="text" name="regMail" required><br />
    <p3>Password</p3><br />
    <input class="inputBox" id="regPass" type="password" name="regPass" required><br />
    <p3>Address</p3><br />
    <input class="inputBox" id="regAdd" type="text" name="regAdd" required><br />
    <button onclick="checkLogin()">Register</button><br />
    <p4>Already have an account? Login <a href="login.php"> here</a></p4>
  </div>
</div>

<?php
  //this function outputs the 2 closing tags in the HTML language
    outputEndHTML();
