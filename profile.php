<?php
  /*outputNavBar and outputHeader is used on all the main shop pages to make sure not alot of HTML code is re-used
    */
    include('common.php');

    outputHeader("MoniShop");
    outputNavBar();
?>
<li>
    <div class="dropdown">
        <button class="dropbtn">
          <img src="images\UserLogo2.png">
        </button>
        <div class="dropdown-content">
            <a id="dropBtn1" href="login.php">Log In</a>
            <a id="dropBtn2" href="register.php">Register</a>
        </div>
    </div>
</li>
<li>
  <a class="shoppingCart" href="cart.php">
    <img src="images\shoppingCart.png"/>
  </a>
</li>
</ul>
<script>
    window.onload = checkLogin;
    var request = new XMLHttpRequest();
    function checkLogin(){
        request.onload = function(){
            if(request.responseText === "ok"){
                document.getElementById("dropBtn1").innerHTML = "Profile";
                document.getElementById("dropBtn1").setAttribute("href", "profile.php");
                document.getElementById("dropBtn2").innerHTML  = "Logout";
                document.getElementById("dropBtn2").removeAttribute("href");
                document.getElementById("dropBtn2").setAttribute("onclick", "logout()");
            }
            else{
                console.log(request.responseText);

            }
        };
        //Set up and send request
        request.open("GET", "checkLogin.php");
        request.send();
    }
    function logout() {
        request.onload = function() {
            if(request.status === 200) {
                alert(request.responseText);
                window.location.replace("index.php");
            }else {
                alert("Error logging out");
            }
        }
        request.open("GET", "logoutFunction.php");
        request.send();
    }
</script>
<?php
  //this function outputs the 2 closing tags in HTML
outputEndHTML();
