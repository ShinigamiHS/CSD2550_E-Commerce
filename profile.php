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
<form action="/submit_pic.php">
   <input type="file" name="pic" accept="image/*">
  <br>
    <input type="submit">
</form>

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
                loadProfile($_SESSION['loggedInUserEmail']);
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
        request.open("POST", "logoutFunction.php");
    request.send("email="+$_SESSION['loggedInUserEmail']);
    }
    window.onload = loadProducts;

    function loadProfile(){
        var request = new XMLHttpRequest();

        request.onload = function(){
            if(request.status === 200){
                displayProducts(request.responseText);
            }
            else
                alert("Error communicating with server: " + request.status);

        };
        request.open("GET", "find_products.php");
        request.send();
    }

    function displayProducts(jsonUsers){

        //document.getElementById("stockList").innerHTML = jsonProducts;
        var prodArray = JSON.parse(jsonUsers);
        var htmlStr ="<table><tr><th>Brand</th><th>Model</th><th>Scr. Size</th><th>Tags</th><th>Price</th></tr>";
        for(var i=0; i<prodArray.length; ++i) {
            htmlStr += "<tr>";
            htmlStr += "<td>" + prodArray[i].fullName + "</td>";
            htmlStr += "<td>" + prodArray[i].email + "</td>";
            htmlStr += "<td>" + prodArray[i].address + "\'\'" + "</td>";
            htmlStr += "</tr>";
        }
        htmlStr += "</table>";
        document.getElementById("stockList").innerHTML = htmlStr;
    }
    function viewPastOrders(){
        var request = new XMLHttpRequest();
        request.onload = function(){
            if(request.status === 200){
                var responseData = request.responseText 
                alert(responseData);
            }
            else 
                alert("ERROR Communicating with server")}
        request.open("GET", "addToCartFunction.php");
        request.send($_SESSION['loggedInUserEmail']);
    }
</script>
<?php
  //this function outputs the 2 closing tags in HTML
outputEndHTML();
