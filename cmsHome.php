<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<h1>Welcome to the MoniShop Content Management System</h1>
<p>
  Using our CMS the staff is able to add/remove/edit products and overview everything related with our stock and orders.
</p>
<p>
  Remember to always double-check any change to the stock before going through with the change.
</p>



<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
