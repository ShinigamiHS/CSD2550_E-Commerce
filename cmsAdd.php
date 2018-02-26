<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<!-- input boxes where you can create a new product -->
<form class="cmsAddForm">
  Brand:<br />
  <input type="text" name="productBrand" placeholder="Samsung"><br />
  Model:<br />
  <input type="text" name="productBrand" placeholder="QE75Q8CAMTXXU"><br />
  Screen size:<br />
  <input type="text" name="productBrand" placeholder="75"><br />
  Description:<br />
  <input type="text" name="productBrand" placeholder="Curved QLED Ultra HD Premium HDR Smart 4K"><br />
  Price:<br />
  <input type="text" name="productBrand" placeholder="4719.00"><br />
  <button class="newProdBtn" type="submit">Create new product</button>
</form>

<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
