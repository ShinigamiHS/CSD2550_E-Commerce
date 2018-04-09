<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<!-- input boxes where you can create a new product -->
<div class="cmsAddForm">
  Brand:<br />
  <input type="text" id="brand" placeholder="Samsung"><br />
  Model:<br />
  <input type="text" id="model" placeholder="QE75Q8CAMTXXU"><br />
  Screen size:<br />
  <input type="text" id="screenSize" placeholder="75"><br />
  Description:<br />
  <input type="text" id="tags" placeholder="Curved QLED Ultra HD Premium HDR Smart 4K"><br />
  Price:<br />
  <input type="text" id="price" placeholder="4719.00"><br />
  <button class="newProdBtn" onclick="OKStatus()">Create new product</button>
</div>
<div id="OKStatus"></div>

<script>
function OKStatus(){
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
  //PHP outputting the end HTML tags
    outputEndCMS();
