<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<!-- input where you enter an ID to look for a product and edit it -->
<h2>Enter the product model to find and edit/remove it:</h2>
<input id="search" class="search" type="text" name="productModel" placeholder="eg:LC49HG90DMUXEN">
<button class="searchBtn" onclick="searchFnc()">Search</button>
<div id="searchList"></div>
<div>
    <div class="modal fade" id="removeModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Are you sure you want to delete this product?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="deleteFnc()">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function deleteFnc(){
    var request = new XMLHttpRequest();
    request.onload = function(){
        if(request.status === 200){
            var responseData = request.responseText;
            console.log(responseData);
            alert(responseData);
            }
            else
                alert("Error communicating with server: " + request.status);
            };
            request.open("POST", "deleteProduct.php");
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            var deleteTerm = document.getElementById("search").value;

            request.send("model=" + deleteTerm);
        }
function searchFnc(){
    var request = new XMLHttpRequest();
    request.onload = function(){
        if(request.status === 200){
                var responseData = request.responseText;
                displayProducts(responseData);
                console.log(responseData);
            }
            else
                alert("Error communicating with server: " + request.status);
            };
            request.open("POST", "find_productEDIT.php");
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            var searchTerm = document.getElementById("search").value;

            request.send("model=" + searchTerm);
        }
        function displayProducts(jsonProducts){
            var prodArray = JSON.parse(jsonProducts);
            var searchTerm = document.getElementById("search").value;
            if(prodArray.length === 0) {
                alert("No product with model " + searchTerm + " found");
            }else {
                console.log(prodArray.length);
                var htmlStr ="<table><tr><th>Brand</th><th>Model</th><th>Scr. Size</th><th>Tags</th><th>Price</th><th>Edit</th><th>Remove</th></tr>";
                for(var i=0; i<prodArray.length; ++i) {
                htmlStr += "<tr>";
                htmlStr += "<td>" + prodArray[i].brand + "</td>";
                htmlStr += "<td>" + prodArray[i].model + "</td>";
                htmlStr += "<td>" + prodArray[i].size + "\'\'" + "</td>";
                htmlStr += "<td>" + prodArray[i].tags + "</td>";
                htmlStr += "<td>" + prodArray[i].price + "</td>";
                htmlStr += "<td><button class='editBtn'>&#128366</button></td>";
                htmlStr += "<td><button class='removeBtn'data-toggle='modal' data-target='#removeModal'>&#10006</button></td>";
                htmlStr += "</tr>";
            }
            htmlStr += "</table>";
            document.getElementById("searchList").innerHTML = htmlStr;
        }
    }
</script>
<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
