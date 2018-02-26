<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<!-- input where you enter an ID to look for a product and edit it -->
<h2>Enter product ID to edit:</h2>
<form>
  <input class="searchID" type="text" name="productID" placeholder="eg:5a6fdf96f310f870fda53530">
  <input class="searchIDBtn"type="submit" value="Search">
</form>

<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
