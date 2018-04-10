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
    <button onclick="Register()">Register</button><br />
    <p4>Already have an account? Login <a href="login.php"> here</a></p4>
  </div>
</div>
<script>
function Register(){
    var request = new XMLHttpRequest();
    request.onload = function(){
        if(request.status === 200){
                var responseData = request.responseText;
                alert(responseData);
            }
            else
                alert("Error communicating with server: " + request.status);
            };
            request.open("POST", "cmsAddFunction.php");
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            var newBrand = document.getElementById("brand").value;
            var newModel = document.getElementById("model").value;
            var newSize = document.getElementById("screenSize").value;
            var newTags = document.getElementById("tags").value;
            var newPrice = document.getElementById("price").value;

            request.send("brand=" + newBrand + "&model=" + newModel + "&screenSize=" + newSize + "&tags=" + newTags + "&price=" + newPrice);
        }
</script>

<?php
  //this function outputs the 2 closing tags in the HTML language
    outputEndHTML();
