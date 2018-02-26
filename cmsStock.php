<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<!-- Displays the product list with all of their details -->
<h3>Stock list</h3>
<table>
  <tr>
    <th>Brand</th>
    <th>Model</th>
    <th>Scr. Size</th>
    <th>Desc.</th>
    <th>Price</th>
  </tr>
  <?php
    //function to replicate the tags for each product
    stockList()
  ?>
</table>
<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
