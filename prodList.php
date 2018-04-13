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
<?php
  //outputSearchBar is used in the same manner as the two functions above
    outputSearchBar();
 ?>
 <!-- The filters section and the (at the moment 8) boxes for the products are generated using php -->
 <div class="AsusBrandDiv">
   <?php
     ItemFilters();
    ?>
   <span id="mainItemDiv" class="mainItemDiv"></span>
 </div>
 <script>
     window.onload = start();

     function start() {
         loadProducts();
         checkLogin();
     }
     function checkLogin(){
         var request = new XMLHttpRequest();
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
     function loadProducts(){
         var request = new XMLHttpRequest();

         request.onload = function(){
             if(request.status === 200){
                 displayProducts(request.responseText);
             }
             else
                 alert("Error communicating with server: " + request.status);
             };
         request.open("GET", "prodListFunction.php");
         request.send();
     }
     function searchProducts() {
         var request = new XMLHttpRequest();

         request.onload = function() {
             if(request.status === 200) {
                 displayProducts(request.responseText);
             } else{
                 alert("Error communicating with server: " + request.status);
             }
         }
         request.open("POST", "prodListFunction.php");
         request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         var searchTerm = document.getElementById("searchBar").value;
         request.send("search=" + searchTerm);
     }
     function displayProducts(jsonProducts){
         console.log(jsonProducts);
         //document.getElementById("stockList").innerHTML = jsonProducts;
         var prodArray = JSON.parse(jsonProducts);
         var htmlStr = "";
         for(var i=0; i<prodArray.length; ++i) {
             htmlStr += "<span class='mainItemDiv2'><div>";
             htmlStr += "<img src='images/x.png' /></div>";
             htmlStr += "<div style='font-size:20px; padding-top:15px;' id='itemInfo" + i + "'><p5>" + prodArray[i].brand + " " + prodArray[i].model + "</p5><br /></div>";
             htmlStr += "<div style='font-size:20px; padding-top:15px;' id='itemInfo" + i+1 + "'><p5>" + prodArray[i].size + "\" Screen</p5><br /></div>";
             htmlStr += "<div><p6>£" + prodArray[i].price + "</p6><button onclick = 'addToCart(" + i + ")'>Add to cart</button></div></span>";
         }
         document.getElementById("mainItemDiv").innerHTML = htmlStr;
     }
     function addToCart(i){
         var request = new XMLHttpRequest();

         request.onload = function(){
             if(request.status === 200){
                 alert(request.responseText);
             }
             else
                 alert("Error communicating with server: " + request.status);

         };
         request.open("POST", "addToCartFunction.php");
         request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         var newCartItem = document.getElementById("itemInfo" + i).innerHTML;
         request.send("newCartItem=" + newCartItem);

     }
 </script>
 <?php
   //this function outputs the 2 closing tags in the HTML language
     outputEndHTML();
