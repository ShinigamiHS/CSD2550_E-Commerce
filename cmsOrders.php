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
<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
