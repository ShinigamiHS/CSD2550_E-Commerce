<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
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
        request.open("GET", "find_products.php");
        request.send();
    }
    function displayProducts(jsonProducts){
        //document.getElementById("stockList").innerHTML = jsonProducts;
        var prodArray = JSON.parse(jsonProducts);
        var htmlStr ="<table><tr><th>Brand</th><th>Model</th><th>Scr. Size</th><th>Tags</th><th>Price</th></tr>";
        for(var i=0; i<prodArray.length; ++i) {
            htmlStr += "<tr>";
            htmlStr += "<td>" + prodArray[i].brand + "</td>";
            htmlStr += "<td>" + prodArray[i].model + "</td>";
            htmlStr += "<td>" + prodArray[i].size + "\'\'" + "</td>";
            htmlStr += "<td>" + prodArray[i].tags + "</td>";
            htmlStr += "<td>" + prodArray[i].price + "</td>";
            htmlStr += "</tr>";
        }
        htmlStr += "</table>";
        document.getElementById("stockList").innerHTML = htmlStr;
    }
    setInterval(function(){
        loadProducts()
    }, 500);
</script>
<!-- Displays the product list with all of their details -->
<div id="stockList"></div>
<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
