<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<script>

var request = new XMLHttpRequest();
    window.onload = start();
    function start() {
        checkLogin();
        loadProducts();
    }
    function checkLogin(){
        request.onload = function(){
            if(request.responseText === "ok"){
                console.log(request.responseText);
                return;
            }
            else{
                alert("YOU NEED TO LOGIN TO ACCESS THIS PAGE");
                window.location.replace("index.php");
                console.log(request.responseText);

            }
        };
        //Set up and send request
        request.open("GET", "checkLoginStaff.php");
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
        request.open("GET", "find_products.php");
        request.send();
    }
    function displayProducts(jsonProducts){
        //document.getElementById("stockList").innerHTML = jsonProducts;
        var prodArray = JSON.parse(jsonProducts);
        var htmlStr ="<table><tr><th>Brand</th><th>Model</th><th>Scr. Size</th><th>Tags</th><th>Price</th><th>Stock Count</th>";
        for(var i=0; i<prodArray.length; ++i) {
            htmlStr += "<tr>";
            htmlStr += "<td>" + prodArray[i].brand + "</td>";
            htmlStr += "<td>" + prodArray[i].model + "</td>";
            htmlStr += "<td>" + prodArray[i].size + "\'\'" + "</td>";
            htmlStr += "<td>" + prodArray[i].tags + "</td>";
            htmlStr += "<td>" + prodArray[i].price + "</td>";
            htmlStr += "<td>" + prodArray[i].stock + "</td>";
            htmlStr += "</tr>";
        }
        htmlStr += "</table>";
        document.getElementById("stockList").innerHTML = htmlStr;
    }
</script>
<!-- Displays the product list with all of their details -->
<div id="stockList"></div>
<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
