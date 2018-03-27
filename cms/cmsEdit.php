<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<!-- input where you enter an ID to look for a product and edit it -->
<h2>Enter a tag to find a product:</h2>
<form action="find_products.php" method="get">
  <input class="search" type="text" name="productTag" placeholder="eg:Curved; 4K; UHD">
  <input class="searchBtn" type="submit" value="Search">
</form>

<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
