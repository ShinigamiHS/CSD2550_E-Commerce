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
    <input class="inputBox" id="loginEmail" type="text" name="loginEmail" required><br />
    <p3>Password</p3><br />
    <input class="inputBox" id="loginPwd" type="password" name="loginPwd" required><br />
    <button onclick="checkLogin()">Login</button><br />
    <p4>Don't have an account yet? Register <a href="register.php">here</a></p4>
  </div>
</div>
<script>
function checkLogin(){
    var request = new XMLHttpRequest();
    request.onload = function(){
        if(request.status === 200){
                var responseData = request.responseText;
                alert(responseData);
                window.location.replace("index.php");
            }
            else
                alert("Error communicating with server: " + request.status);
            };
            request.open("POST", "loginCustomer.php");
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            var loginEmail = document.getElementById("loginEmail").value;
            var loginPwd = document.getElementById("loginPwd").value;

            request.send("loginEmail=" + loginEmail + "&loginPwd=" + loginPwd);
        }
</script>
<?php
  //this function outputs the 2 closing tags in the HTML language
    outputEndHTML();
