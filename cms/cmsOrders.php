<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<!-- Nested lists containing customer ID along with their products IDs-->
<h3 class="orderH3">Latest orders:</h3>
<ul class="orderUL">
  <li class="custLI" >Customer ID : 5a6fdf96f310f870fda53530
    <ul>
      <li class="prodLI" >ProdID:5a6fdf96f310f870fda53530<br />Price:£500.00</li><br />
      <li class="prodLI" >ProdID:5a6fdf96f310f870fda53530<br />Price:£500.00</li>
    </ul>
  </li>
  <li class="custLI" >Customer ID : 5a6fdf96f310f870fda53530
    <ul>
      <li class="prodLI" >ProdID:5a6fdf96f310f870fda53530<br />Price:£500.00</li><br />
      <li class="prodLI" >ProdID:5a6fdf96f310f870fda53530<br />Price:£500.00</li>
    </ul>
  </li>
  <li class="custLI" >Customer ID : 5a6fdf96f310f870fda53530
    <ul>
      <li class="prodLI" >ProdID:5a6fdf96f310f870fda53530<br />Price:£500.00</li><br />
      <li class="prodLI" >ProdID:5a6fdf96f310f870fda53530<br />Price:£500.00</li>
    </ul>
  </li>
</ul>
<script>
window.onload = checkLogin;
var request = new XMLHttpRequest();
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
</script>

<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
