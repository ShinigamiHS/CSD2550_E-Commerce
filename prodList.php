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
 <!-- The filters section and the (at the moment 8) boxes for the products are generated using php -->
 <div class="AsusBrandDiv">
   <?php
     ItemFilters();
    ?>
   <span id="mainItemDiv" class="mainItemDiv"></span>
 </div>
 <script>
     window.onload = loadProducts;

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
     function displayProducts(jsonProducts){
         //document.getElementById("stockList").innerHTML = jsonProducts;
         var prodArray = JSON.parse(jsonProducts);
         var htmlStr = "";
         for(var i=0; i<prodArray.length; ++i) {
             htmlStr += "<span class='mainItemDiv2'><div>";
             htmlStr += "<img src='images/x.png' /></div>";
             htmlStr += "<div class='itemInfo1'><p5>" + prodArray[i].brand + " " + prodArray[i].model + "</p5><br /></div>";
             htmlStr += "<div class='itemInfo2'><p5>" + prodArray[i].size + "\" Screen</p5><br /></div>";
             htmlStr += "<div><p6>£" + prodArray[i].price + "</p6><button>Add to cart</button></div></span>";
         }
         document.getElementById("mainItemDiv").innerHTML = htmlStr;
     }
 </script>
 <?php
   //this function outputs the 2 closing tags in the HTML language
     outputEndHTML();
