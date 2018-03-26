<?php
    include('CMScommon.php');
    //these two functions make sure there's no need to repeat the same HTML code on all the pages
    outputCMSHeader();
    outputMain();
?>
<!-- input boxes where you can create a new product -->
<form action="cmsAddFunction.php" method="post" class="cmsAddForm">
  Brand:<br />
  <input type="text" name="brand" placeholder="Samsung"><br />
  Model:<br />
  <input type="text" name="model" placeholder="QE75Q8CAMTXXU"><br />
  Screen size:<br />
  <input type="text" name="screenSize" placeholder="75"><br />
  Description:<br />
  <input type="text" name="tags" placeholder="Curved QLED Ultra HD Premium HDR Smart 4K"><br />
  Price:<br />
  <input type="text" name="price" placeholder="4719.00"><br />
  <button class="newProdBtn" type="submit">Create new product</button>
</form>

<?php
  //PHP outputting the end HTML tags
    outputEndCMS();
